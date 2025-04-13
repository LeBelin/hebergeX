<?php 
include 'layout.php'; 

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['alias']) || !isset($_SESSION['nom']) || !isset($_SESSION['prenom']) || !isset($_SESSION['mail'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
$message = '';

// Traitement de la modification des informations personnelles
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Modifier les informations personnelles (nom, prénom, email)
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];

        try {
            // Mise à jour des informations personnelles dans la base de données
            $sql = "UPDATE user SET nom = :nom, prenom = :prenom, mail = :mail WHERE alias = :alias";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':alias', $_SESSION['alias']);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();

            // Mettre à jour la session avec les nouvelles informations
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['mail'] = $mail;

            $message = "Informations mises à jour avec succès.";
        } catch (PDOException $e) {
            $message = "Erreur lors de la mise à jour des informations : " . $e->getMessage();
        }
    }

    // Modifier le mot de passe
    if (isset($_POST['mdp_actuel'], $_POST['nouveau_mdp'], $_POST['confirmer_mdp'])) {
        $mdp_actuel = $_POST['mdp_actuel'];
        $nouveau_mdp = $_POST['nouveau_mdp'];
        $confirmer_mdp = $_POST['confirmer_mdp'];

        try {
            // Récupérer le mot de passe actuel de l'utilisateur
            $sql = "SELECT mdp FROM user WHERE alias = :alias";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':alias', $_SESSION['alias']);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérifier si le mot de passe actuel est correct
            if ($user && password_verify($mdp_actuel, $user['mdp'])) {
                // Vérifier que les nouveaux mots de passe correspondent
                if ($nouveau_mdp === $confirmer_mdp) {
                    // Hacher le nouveau mot de passe
                    $nouveau_mdp_hash = password_hash($nouveau_mdp, PASSWORD_DEFAULT);

                    // Mettre à jour le mot de passe dans la base de données
                    $sql = "UPDATE user SET mdp = :mdp WHERE alias = :alias";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':mdp', $nouveau_mdp_hash);
                    $stmt->bindParam(':alias', $_SESSION['alias']);
                    $stmt->execute();

                    $message = "Mot de passe mis à jour avec succès.";
                } else {
                    $message = "Les nouveaux mots de passe ne correspondent pas.";
                }
            } else {
                $message = "Mot de passe actuel incorrect.";
            }
        } catch (PDOException $e) {
            $message = "Erreur lors de la mise à jour du mot de passe : " . $e->getMessage();
        }
    }
}
?>



<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 pt-5 text-center text-lg-start">
                <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['nom']); ?> <?php echo htmlspecialchars($_SESSION['prenom']); ?></h1>
                <p>Votre Alias : <?php echo htmlspecialchars($_SESSION['alias']); ?></p>
                <p>Nom : <?php echo htmlspecialchars($_SESSION['nom']); ?></p>
                <p>Prénom : <?php echo htmlspecialchars($_SESSION['prenom']); ?></p>
                <p>Email : <?php echo htmlspecialchars($_SESSION['mail']); ?></p>



                <h3>Modifier vos informations</h3>
                <form action="profile.php" method="POST">
                    <label for="nom">Nom :</label><br>
                    <input type="text" name="nom" value="<?php echo htmlspecialchars($_SESSION['nom']); ?>" required><br><br>

                    <label for="prenom">Prénom :</label><br>
                    <input type="text" name="prenom" value="<?php echo htmlspecialchars($_SESSION['prenom']); ?>" required><br><br>

                    <label for="mail">Email :</label><br>
                    <input type="email" name="mail" value="<?php echo htmlspecialchars($_SESSION['mail']); ?>" required><br><br>

                    <input type="submit" value="Modifier" class="btn btn-primary">
                </form>

                <h3>Modifier votre mot de passe</h3>
                <form action="profile.php" method="POST">
                    <label for="mdp_actuel">Mot de passe actuel :</label><br>
                    <input type="password" name="mdp_actuel" required><br><br>

                    <label for="nouveau_mdp">Nouveau mot de passe :</label><br>
                    <input type="password" name="nouveau_mdp" required><br><br>

                    <label for="confirmer_mdp">Confirmer le nouveau mot de passe :</label><br>
                    <input type="password" name="confirmer_mdp" required><br><br>

                    <input type="submit" value="Modifier le mot de passe" class="btn btn-primary">
                </form>



                <h3>Supprimer votre compte</h3>
                <form action="supprimer.php" method="POST">
                    <input type="submit" value="Supprimer le compte" class="btn btn-danger" style="color: white;">
                </form>
            </div>

            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="img/hero.png" alt="Image utilisateur">
            </div>
        </div>
    </div>
</div>

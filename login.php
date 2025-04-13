<?php
session_start();
$message = '';

include 'bdd.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    if (!empty($mail) && !empty($mdp)) {
        try {
            $sql = "SELECT * FROM user WHERE mail = :mail";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérifier si l'utilisateur existe et si le mot de passe est correct
            if ($user && password_verify($mdp, $user['mdp'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['alias'] = $user['alias'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['mail'] = $user['mail'];

                header('Location: index.php'); // Rediriger vers la page principale après connexion
                exit();
            } else {
                $message = "Email ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            $message = "Erreur lors de la connexion : " . $e->getMessage();
        }
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
        <h2>Connexion</h2>

        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <label for="mail">Email :</label>
        <input type="email" id="mail" name="mail" required><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br>

        <a href="register.php" style="color: black;">Pas de compte ?</a></br></br>
        <input type="submit" value="Se connecter">
    </form>

</body>
</html>

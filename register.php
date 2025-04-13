<?php
$message = '';

include 'bdd.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alias = $_POST['alias'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    if (!empty($alias) && !empty($nom) && !empty($prenom) && !empty($mail) && !empty($mdp)) {

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO user (alias, nom, prenom, mail, mdp) VALUES (:alias, :nom, :prenom, :mail, :mdp)";
            $stmt = $pdo->prepare($sql);

            $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

            $stmt->bindParam(':alias', $alias);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':mdp', $mdp_hache);

            $stmt->execute();

            // Ajout de l'utilisateur à GLPI via l'API REST
            $url_glpi = 'http://172.31.25.22/glpi/apirest.php/';
            $app_token = 'f7KWo19RuRFmZgtibrcnaOx4NPAzLLiFDFfTNq1t'; // Remplace par ton jeton API externe

            $data = [
                'input' => [
                    'name' => $alias,
                    'firstname' => $prenom,
                    'realname' => $nom,
                    'email' => $mail,
                    'password' => $mdp,
                    'is_active' => 1,
                    'language' => 'fr',
                    'profile' => 1,  // Profil de l'utilisateur, à adapter selon ton installation
                    'entities_id' => 1  // ID de l'entité, à adapter selon ton installation
                ]
            ];
            

            $headers = [
                "Content-Type: application/json",
                "App-Token: $app_token" // Utilise le jeton API externe pour l'authentification
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url_glpi . 'User');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($status_code == 201) {
                $message = "Enregistrement réussi et utilisateur ajouté à GLPI !";
                header('Location: login.php');
                exit();
            } else {
                $message = "Erreur lors de l'ajout à GLPI. Code d'erreur : $status_code";
            }
            shell_exec('sudo ./addutil.sh '.$alias.' '.$mdp);

        } catch (PDOException $e) {
            $message = "Erreur lors de l'enregistrement : " . $e->getMessage();
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
    <title>Enregistrement Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
        <h2>Enregistrement d'un nouvel utilisateur</h2>

        <?php if ($message): ?>
            <p class="<?php echo ($message == 'Enregistrement réussi et utilisateur ajouté à GLPI !') ? 'success' : ''; ?>"><?php echo $message; ?></p>
        <?php endif; ?>

        <label for="alias">Alias :</label>
        <input type="text" id="alias" name="alias" required><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="mail">Email :</label>
        <input type="email" id="mail" name="mail" required><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br>

        <a href="login.php" style="color: black;">Déjà un compte ?</a></br></br>

        <input type="submit" value="S'enregistrer">
    </form>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['alias'])) {
    header('Location: index.php');
    exit;
}

try {
    $pdo = new PDO('mysql:host=172.31.0.21;dbname=glpi', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("DELETE FROM user WHERE alias = ?");
    $stmt->execute([$_SESSION['alias']]);

    session_unset();
    session_destroy();

    header('Location: index.php');
    exit;
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

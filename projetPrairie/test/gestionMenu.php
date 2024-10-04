<?php

$host = 'localhost';
$dbname = 'carterestaurant';
$username = 'root';
$password = '';

try {

    // Connexion à la base de données avec PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8"; // DSN
    $pdo = new PDO($dsn, $username, $password);

    // Configuration des attributs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour sélectionner tous les utilisateurs
    $sql = "SELECT id, catégorie, nom, prix FROM carte";

    // Exécution de la requête avec la méthode query
    $stmt = $pdo->query($sql);

    // Vérification et affichage des résultats
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . " - categorie : " . $row['catégorie'] . " - nom: " . $row['nom'] . "<br>";
        }
    } else {
        echo "0 résultats";
    }

} catch (PDOException $e) {

    die("Erreur de connexion ou de requête : " . $e->getMessage());
    
}

// Fermeture de la connexion (automatique à la fin du script)

?>


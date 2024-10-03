<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



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

        // Requête SQL pour sélectionner tous les plats
        $sql = "SELECT catégorie FROM carte WHERE id=1";
        $plat = "SELECT nom, prix FROM carte WHERE catégorie= 'plat'";

        // Exécution de la requête avec la méthode query
        $stmt = $pdo->query($sql);
        $st = $pdo->query($plat);

        // Vérification et affichage des résultats
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo $row['catégorie'] . " : <br>" ;
            }
        } else {
            echo "0 résultats";
        }

        if ($st->rowCount() > 0) {
            while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
                echo $row['nom'] . " : " . $row['prix'] . " €" . "<br>";
            }
        } else {
            echo "0 résultats";
        }

        echo "<br>";

        // selection des boissons
        $idBoisson = "SELECT catégorie FROM carte WHERE id=5";
        $boisson = "SELECT nom, prix FROM carte WHERE catégorie= 'boisson'";

        // Exécution de la requête avec la méthode query
        $boi = $pdo->query($idBoisson);
        $sson = $pdo->query($boisson);

        // Vérification et affichage des résultats
        if ($boi->rowCount() > 0) {
            while ($row = $boi->fetch(PDO::FETCH_ASSOC)) {
                echo $row['catégorie'] . " : <br>" ;
            }
        } else {
            echo "0 résultats";
        }

        if ($sson->rowCount() > 0) {
            while ($row = $sson->fetch(PDO::FETCH_ASSOC)) {
                echo $row['nom'] . " : " . $row['prix'] . " €" . "<br>";
            }
        } else {
            echo "0 résultats";
        }

        echo "<br>";

        $idDessert = "SELECT catégorie FROM carte WHERE id=9";
        $dessert = "SELECT nom, prix FROM carte WHERE catégorie= 'dessert'";

        // Exécution de la requête avec la méthode query
        $des = $pdo->query($idDessert);
        $sert = $pdo->query($dessert);

        // Vérification et affichage des résultats
        if ($des->rowCount() > 0) {
            while ($row = $des->fetch(PDO::FETCH_ASSOC)) {
                echo $row['catégorie'] . " : <br>" ;
            }
        } else {
            echo "0 résultats";
        }

        if ($sert->rowCount() > 0) {
            while ($row = $sert->fetch(PDO::FETCH_ASSOC)) {
                echo $row['nom'] . " : " . $row['prix'] . " €" . "<br>";
            }
        } else {
            echo "0 résultats";
        }

    } catch (PDOException $e) {

        die("Erreur de connexion ou de requête : " . $e->getMessage());
        
    }

    // Fermeture de la connexion (automatique à la fin du script)

?>

    <a href="gestionMenu.php"><p>gestion du menu</p></a>    


</body>
</html>
<?php

    include("menu.html");

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

        $idDessert = "SELECT catégorie FROM carte WHERE id=9";
        $dessert = "SELECT nom, prix, descript FROM carte WHERE catégorie= 'dessert'";

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
                echo "<br> - " . $row['nom'] . " : " . $row['prix'] . " €" . "<br>" . $row['descript'] . " <br>";
            }
        } else {
            echo "0 résultats";
        }

    } catch (PDOException $e) {

        die("Erreur de connexion ou de requête : " . $e->getMessage());
        
    }


?>
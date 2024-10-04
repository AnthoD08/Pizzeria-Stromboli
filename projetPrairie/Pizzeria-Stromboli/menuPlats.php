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

        // Requête SQL pour sélectionner tous les plats
        $sql = "SELECT catégorie FROM carte WHERE id=1";
        $plat = "SELECT nom, prix, descript FROM carte WHERE catégorie= 'plat'";

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
                echo "<br> - " . $row['nom'] . " : " . $row['prix'] . " €" . "<br>" . $row['descript'] . " <br>";
            }
        } else {
            echo "0 résultats";
        }
    } catch (PDOException $e) {

        die("Erreur de connexion ou de requête : " . $e->getMessage());
        
    }


?>
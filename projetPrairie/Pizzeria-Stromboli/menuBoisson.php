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

        $idBoisson = "SELECT catégorie FROM carte WHERE id=5";
        $boisson = "SELECT nom, prix, descript FROM carte WHERE catégorie= 'boisson'";

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
                echo "<br> - " . $row['nom'] . " : " . $row['prix'] . " €" . "<br>" . $row['descript'] . " <br>";
            }
        } else {
            echo "0 résultats";
        } } catch (PDOException $e) {

            die("Erreur de connexion ou de requête : " . $e->getMessage());
            
        }

?>
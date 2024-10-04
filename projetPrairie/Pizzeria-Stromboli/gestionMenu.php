<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Gestion du Menu </h1>


    <h2>Ajout a la carte</h2>
    <form action= "gestionMenu.php" method= "post">

        <label>Catégorie : </label>
        <input type="text" name="categorie" />

        <br><br>

        <label>Nom du plat/boisson/dessert : </label>
        <input type="text" name="nom" />

        <br><br>

        <label>Prix (en €) : </label>
        <input type="number" name="prix" min="1" max="500"/>

        <br><br>

        <label>Descrption : </label>
        <input type="text" name="description" />


        <br><br><br>

        <input type = "submit" name = "valider" value = "ENVOI">


    </form> 

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
            if(!empty($_POST['nom'])) {
                $cat = $_POST['categorie'];
                $nom = $_POST['nom'];
                $prix = $_POST['prix'];
                $description = $_POST['description'];

           
                $sql = "INSERT INTO carte (catégorie, nom, prix, descrip)
                VALUES ('$cat', '$nom', '$prix', '$description')";
                $pdo->exec($sql);
            }
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    ?>

    <br><br>

    <h2>Éléments de la carte</h2>

    <?php

        $host = 'localhost';
        $dbname = 'carterestaurant';
        $username = 'root';
        $password = '';

        try{

            $dsnn = "mysql:host=$host;dbname=$dbname;charset=utf8"; // DSN
            $connect = new PDO($dsn, $username, $password);

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT catégorie FROM carte WHERE id=1";
            $plat = "SELECT nom, id, prix, descript FROM carte WHERE catégorie= 'plat'";

            // Exécution de la requête avec la méthode query
            $stmt = $connect->query($sql);
            $st = $connect->query($plat);

            // Vérification et affichage des résultats
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<h4>" . $row['catégorie'] . " : </h4> " ;
                }
            } else {
                echo "0 résultats";
            }

            if ($st->rowCount() > 0) {
                while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
                    echo "<br> - " . $row['nom'] . " : " . $row['prix'] . " €" . " - ID : " . $row['id'] . "<br>" . $row['descript'] . " <br>";
                }
            } else {
                echo "0 résultats";
            }

            echo "<br>";

            // selection des boissons
            $idBoisson = "SELECT catégorie FROM carte WHERE id=5";
            $boisson = "SELECT nom, id, prix, descript FROM carte WHERE catégorie= 'boisson'";

            // Exécution de la requête avec la méthode query
            $boi = $pdo->query($idBoisson);
            $sson = $pdo->query($boisson);

            // Vérification et affichage des résultats
            if ($boi->rowCount() > 0) {
                while ($row = $boi->fetch(PDO::FETCH_ASSOC)) {
                    echo "<h4>" . $row['catégorie'] . " : </h4>" ;
                }
            } else {
                echo "0 résultats";
            }

            if ($sson->rowCount() > 0) {
                while ($row = $sson->fetch(PDO::FETCH_ASSOC)) {
                    echo "<br> - " . $row['nom'] . " : " . $row['prix'] . " €" . " - ID : " . $row['id'] . "<br>" . $row['descript'] . " <br>";
                }
            } else {
                echo "0 résultats";
            }

            echo "<br>";

            $idDessert = "SELECT catégorie FROM carte WHERE id=9";
            $dessert = "SELECT nom, id, prix, descript FROM carte WHERE catégorie= 'dessert'";

            // Exécution de la requête avec la méthode query
            $des = $pdo->query($idDessert);
            $sert = $pdo->query($dessert);

            // Vérification et affichage des résultats
            if ($des->rowCount() > 0) {
                while ($row = $des->fetch(PDO::FETCH_ASSOC)) {
                    echo "<h4>" . $row['catégorie'] . " : </h4>" ;
                }
            } else {
                echo "0 résultats";
            }

            if ($sert->rowCount() > 0) {
                while ($row = $sert->fetch(PDO::FETCH_ASSOC)) {
                    echo "<br> - " . $row['nom'] . " : " . $row['prix'] . " €" . " - ID : " . $row['id'] . "<br>" . $row['descript'] . " <br>";
                }
            } else {
                echo "0 résultats";
            }


        }
        catch (PDOException $e) {

            die("Erreur de connexion ou de requête : " . $e->getMessage());
            
        }

    ?>

    <br><br>

    <h2>Supprimer de la carte</h2>

    <form action="gestionMenu.php" method="post">
        
        <label>ID de l'item a supprimer : </label>
        <input type="number" name="idSuppr" min="1" max="500"/>
        <br>
        <input type = "submit" name = "valider" value = "SUPPRIMER">
    </form>

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

            if(!empty($_POST['idSuppr'])) {
                $id = $_POST['idSuppr'];

                $sql = "DELETE FROM carte WHERE id='$id'";
                $pdo->exec($sql);
            }
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    ?>

    <br><br>

    <h2>Modifier la carte</h2>

    <form action= "gestionMenu.php" method= "post">

        <label>(Nouvelle) Catégorie : </label>
        <input type="text" name="cat" />

        <br><br>

        <label>(Nouveau) Nom du plat/boisson/dessert : </label>
        <input type="text" name="renom" />

        <br><br>

        <label>(Nouveau) Prix (en €) : </label>
        <input type="number" name="pris" min="1" max="500"/>

        <br><br>

        <label>ID de l'item a modifier : </label>
        <input type="number" name="idModif" min="1" max="500"/>

        <br><br>

        <label>(Nouvelle) Description : </label>
        <input type="text" name="desc" />

        <br><br>

        <input type = "submit" name = "valider" value = "MODIFIER">

    </form> 

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

            if(!empty($_POST['idModif'])) {
                $id = $_POST['idModif'];
                $cat = $_POST['cat'];
                $nom = $_POST['renom'];
                $prix = $_POST['pris'];
                $description = $_POST['desc'];

                $sql = "UPDATE carte SET catégorie='$cat', nom='$nom', prix='$prix', descript='$description'  WHERE id='$id' ";
               
                $pdo->exec($sql);
            }
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    ?>


    <a href="index.html"><p>Deconnexion</p></a>
</body>
</html>
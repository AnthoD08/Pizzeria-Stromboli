<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "gestionMenu.php" method= "post">

        <label>Catégorie : </label>
        <input type="text" name="categorie" />

        <br><br>

        <label>Nom du plat/boisson/dessert : </label>
        <input type="text" name="nom" />

        <br><br>

        <label>Prix (en €) : </label>
        <input type="number" name="prix" min="1" max="50"/>

        <br><br><br>

        <input type = "submit" name = "valider" value = "Envoi">


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
    $cat = $_POST['categorie'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];

    $sql = "INSERT INTO carte (catégorie, nom, prix)
    VALUES ('$cat', '$nom', '$prix')";
    $pdo->exec($sql);
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

?>

    <a href="menu.php"><p>menu</p></a>
</body>
</html>
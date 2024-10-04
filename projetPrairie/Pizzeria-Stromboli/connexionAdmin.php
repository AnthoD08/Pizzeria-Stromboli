<?php include("coAdmin.html"); 

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
        $sql = "SELECT identifiant, mdp FROM adminmenu WHERE id=0";
        $stmt = $pdo->query($sql);

        if(isset($_POST['nom']) && !empty($_POST['nom'])){
    
            if(isset($_POST['mdp']) && !empty($_POST['mdp'])){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if($_POST['nom'] == $row['identifiant'] && $_POST['mdp'] == $row['mdp']){

                    echo "<a href='gestionMenu.php'><h2>Gestion du menu</h2></a>";

                }
                else{ echo "identifiant ou mdp inccorect";}
            }
        }
    }
    catch (PDOException $e) {

        die("Erreur de connexion ou de requête : " . $e->getMessage());
        
    }



?>

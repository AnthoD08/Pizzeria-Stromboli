<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="index">

<nav class="navbar">
    <a href="#">
        <h1 class="pizzeria">Pizzeria Stromboli</h1>
    </a>

    <ul>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="inscription.html">Inscriptions</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

</nav>

<div class="container">
  <h1>Formulaire de contact</h1>
  <form action="traitement.php" method= "post">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Votre message" style="height:200px"></textarea>

    <input type="submit" name= "envoyer" value="Envoyer">
  </form>
</div



<div class="footer">
<p>Footer</p>
</div>

</body>
</html>
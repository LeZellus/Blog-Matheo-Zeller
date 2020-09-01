<?php $this->title = "Inscription"; ?>

<h1>Inscription</h1>

<div>
    <form method="post" action="../public/index.php?route=register">
        <label for="firstName">Prénom</label>
        <input type="text" id="firstName" name="firstname">

        <label for="lastName">Nom</label>
        <input type="text" id="lastName" name="lastname">

        <label for="email">Email</label>
        <input type="text" id="email" name="email">

        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password">



        <input type="submit" value="Inscription" id="submit" name="submit">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>
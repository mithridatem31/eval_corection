<?php
    //ajout de la vue
    include('../vue/vue_article.php');
    
    //test existence des champs de formulaire nom_article et prix_article
    if(isset($_POST['nom_article']) and isset($_POST['prix_article']) and !empty($_POST['nom_article']) and !empty($_POST['prix_article']))
    {   
        //création des variables qui stockent les super globales POST
        $name = $_POST['nom_article'];
        $price = $_POST['prix_article'];
        //ajout de la connexion à la bdd
        include('../utils/connect.php');
        //ajout du model
        include('../model/model_article.php');
        echo '<p>Ajout d\'un article qui se nomme : '.$name.' et dont le prix est de : '.$price.' €</p>';
    }
    //test si nom_article et prix_article n'existe pas (ils sont vides)
    else if(!isset($_POST['nom_article']) and !isset($_POST['prix_article']))
    {
        echo '<p>Veuillez remplir les champs de formulaire !!! </p>';
    }
    //test si nom_article vide
    else if(empty($_POST['nom_article']) and !empty($_POST['prix_article']))
    {
        echo '<p>Veuillez saisir un nom d\'article !!! </p>';
    }
    //test si prix_article vide
    else if(empty($_POST['prix_article']) and !empty($_POST['nom_article']))
    {
        echo '<p>Veuillez saisir un prix d\'article !!! </p>';
    }    
?>

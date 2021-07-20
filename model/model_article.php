<?php
    //requête insert article(non_article et prix_article)
     $bdd->query('insert into article(nom_article, prix_article)
     values("'.$name.'", '.$price.')');
?>
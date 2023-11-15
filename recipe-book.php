<?php
    include 'navigation.seller.php';
    //require 'includes/methods.inc.php';
    $recipeName = $_GET['recipe'];
    $recipeBook = new methods();
    $recipeBook -> generateRecipeContent($_SESSION['email'], $recipeName)
?>
<?php 
    include 'navigation.seller.php';
?>
<!-- <div class="container"> -->

    <?php 
        //require 'includes/methods.inc.php';
        $my_recipes = new methods();
        $my_recipes -> selectMyRecipes($_SESSION['email']);
    ?>
<!-- </div> -->
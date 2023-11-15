
<?php
    // session_start();
    // require 'error.php';
    // require 'includes/methods.inc.php';
    // $recipe = new methods();
    // $_SESSION['email'] = "wezimosiuoa@gmail.com";


    // if(!isset($_SESSION['email'])){
    //     // $loginRequired = new message();
    //     // $loginRequired -> errorMessage(" Your session has expired, log in !!! ", "index.php");
    //     header("Location: index.php?loginfirst");
    // }
    // else{
    //     // if(!isset($_SESSION['username'])){
    //     //     header("Location: index.php?loginfirst");
    //     // }
    //     // else {
    //     require 'includes/dbcon.inc.php';

    //     $sql = "select profile_picture from `recipe-chef` where emailAddress = '".$_SESSION['email']."';";        
    //     $result = mysqli_query($conn, $sql);

    //     while($row = mysqli_fetch_assoc($result)){
    //         $img = $row['profile_picture'];
    //     }
    //     // }
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link type="image/x-icon" rel="icon" href="img/pc.jpeg"/>
    <title>Recipes</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container"> 
        <div class="recipeNav" style="text-align: right;">
            <a href="add-video-recipe.php" class="btn btn-success" >  <i class="fa-solid fa-video"></i> Add Video Recipe </a>
            <a href="" class="btn btn-success"> <i class="fa-solid fa-file"></i> Add Document Recipe </a>
            <!-- <a href="" class="btn btn-success"> Add Manual Recipe </a> -->
        </div>
    </div>
</body>
</html>

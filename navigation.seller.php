<?php
    session_start();
    require 'error.php';
    require 'includes/methods.inc.php';
    $recipe = new methods();
    $_SESSION['email'] = "wezimosiuoa@gmail.com";


    if(!isset($_SESSION['email'])){
        // $loginRequired = new message();
        // $loginRequired -> errorMessage(" Your session has expired, log in !!! ", "index.php");
        header("Location: index.php?loginfirst");
    }
    else{
        // if(!isset($_SESSION['username'])){
        //     header("Location: index.php?loginfirst");
        // }
        // else {
        require 'includes/dbcon.inc.php';

        $sql = "select profile_picture from `recipe-chef` where emailAddress = '".$_SESSION['email']."';";        
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            $img = $row['profile_picture'];
        }
        // }
    }
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
    <style>
        
        .info{
            width: 100%;
            height: 100px;
            padding: 20px;
            border: 1px solid black;
        }
        .info img{
            height: 70px;
            border-radius: 50%;
            width: 70px;
        }
        .info .mess{
            float: right;
            padding: 20px;
        }
        .info .profile-pic{
            float: left;
        }
    </style>
    <div class="info" style="background-color: #04AA6D;">
        <div class="mess">
            <h4 id="logged-in-user" >Welcome : <?php echo  $_SESSION['email'];?> <i class="fa fa-user-circle"></i></h4>

        </div>
        <div class="profile-pic">
            <img src="recipe-seller-profiles-pics/<?=$img?>" > 
        </div>  
        
    </div>
    <br>
   <style>
        .session{
            width: 100%;
            text-align: right;
            font-weight: bold;
        }
    .driver-panel .session a{
        color: red;
        text-align: center;
    }
    .driver-panel{
        margin-right: 20px;
    }
    </style>
    <div class="driver-panel">
        <div class="session" style="font-family: tahoma;">
        <!-- <i class="fa-solid fa-user"></i><a href="company-profile.php"></a> ||  -->
            <i class="fa-sharp fa-solid fa-right-from-bracket"></i><a href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #04AA6D;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01" >
        <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="seller.panel.php"> <i class="fa fa-home"></i> Home  <sup style="color: red;"> <?php echo $recipe -> numberOfRecipiesPerSeller($_SESSION['email']);?></sup> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add-new-recipe.php"> <i class="fa-solid fa-plus"></i> New Recipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders-on-my-recipe.php"> <i class="fa-solid fa-cart-shopping"></i> Orders </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blocked-companies.php"> # </a>
            </li>
        </ul>

        <!-- <select name="" id=""></select> -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
</body>
</html>
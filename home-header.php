<?php 

    // require 'includes/dbcon.inc.php'; 
    require 'includes/methods.inc.php'; 
    $recipe = new methods();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- fabricon -->
	<link type="image/x-icon" rel="icon" href="img/pc.jpeg"/>
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://www.w3schools.com/4/w3.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c398237a29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recipes</title>
</head>
<div class="nav">
		<div class="head">
			<p>A recipe has no soul. You as the cook, must <em>bring soul</em> to the recipe.</p>
		</div>
        <style>
            .content{
                font-size:1vw;
            }
        </style>
		<div class="content">
			<ul>
				<li><div class="logo">ONLINE RECIPE<br></div><div class="market">MARKET</div></li>
				<li class="OR">|</li>
				<a href="index.php"><li class="active"><i class="fa fa-home"></i>Home</li></a>
				<a href="about.php"><li><i class="fa fa-question-circle"></i>About</li></a>
				<a href="contact.php"><li><i class="fa fa-phone"></i>Contact Us</li></a>
				<a href="#"><li><i class="fa fa-comments-o"></i>Reviews</li></a>
				<div class="right">
					<li><i class="fa fa-search"></i>SEARCH</li>
					<li onclick="opensign()"><i class="fa fa-user-circle"></i>SIGN IN</li>
				</div>	
			</ul>
		</div>
	</div>
	<div class="form_sign" id="sign">
		<i style="float: right; color: red; padding: -5px;" class="fa fa-times" onclick="closesign()"></i><br>
			<style>
                a{
                    color: #000000;
                    text-decoration: none;
                }
                a #ok{
                    color: green;
                }

			</style>
            <!-- Login  -->
            <?php 
                if (isset($_POST['login'])) {
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);

                    //$recipe -> login($email, $password);
                    echo (" Email Address is {$email} and passsword is {$password}");
                }
            ?>
            <script>
                function test (){
                    alert ('this is working ');
                }
            </script>
			<form action="" class="form-container" method="POST">
				<h1>Sign In</h1>
				<label for="email" > <i class="fa-sharp fa-solid fa-envelope"></i> Email </label>
				<input type="text" name="email" >
				<label for="psw"> <i class="fa-sharp fa-solid fa-key"></i> Password</label>
				<input type="password" name="password">
				<button type="submit" class="btn" name="login" > <i class="fa-solid fa-right-to-bracket"></i> Login</button>
				<button type="button" class="btn cancel" onclick="closesign()"> <i class="fa-solid fa-ban"></i> Cancel</button>
                <center><span><a href="#">Create Account <i id="ok" class="fa-solid fa-right-to-bracket fa-beat" onclick="openRegistration()" id="add-seller"></i></a></span></center>
            </form>
	</div>

    <script>
        function openRegistration(){
            document.getElementById("body").style.display = "none";
            document.getElementById("sign").style.display = "none";
            document.getElementById("my-register").style.display = "block";
            document.getElementById("arrow").style.display = "none";
        }
        function openabout(){
            document.getElementById("about").style.display = "block";
        }

        function closeabout(){
            document.getElementById("about").style.display = "none";
        }
        </script>

        <!-- javascript pop up for signin -->
        <script>
        function opensign(){
            document.getElementById("sign").style.display = "block";
        }

        function closesign(){
            document.getElementById("sign").style.display = "none";
        }
        </script>

        <!-- javascript pop up for conact -->
        <script>
        function opencontact(){
            document.getElementById("contact").style.display = "block";
        }

        function closecontact(){
            document.getElementById("contact").style.display = "none";
        }
    </script>
    <style>
            @media only screen and (min-width: 500px){
                .container .container input{
                    width: 100%;
                }
            }
        .container{
            /* top:50%; */
            left:50%;
            /* position: absolute; */
            /* border: 1px solid green; */
            background-image: url('img/pc.jpeg');
            height: auto;
            width:50%;
            text-align: center;
            margin-left: 25%;
            font-weight: 0;
        }
        .form-class {
            text-align: center;
            font-size: 20;
            text-align: left;
            line-height: 2;
            font-style: revert;
            font-family: tahoma;
        }
        input {
            margin-left: 20px;
            width: 90%;
            height: 30px;
            border: 1px solid black;
            text-decoration: none;
            border-radius: 5px;
            padding-left: 30px;
        }
        input[type=submit]{
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            padding: 20px;
            font-weight: bold;
            margin:20px;
        }
        textarea{
            margin-left: 20px;
            width: 90%;
            height: 60px;
            border: 1px solid black;
            text-decoration: none;
            border-radius: 5px;
        }
        
    </style>
    <script src="js/javascript.js">
        fieldsValidatation();
    </script>
    <?php 
        if (isset($_POST['submit']) && isset($_FILES['image'])) {

            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $surname = mysqli_real_escape_string($conn, $_POST['surname']);
            $phone_number = mysqli_real_escape_string($conn, $_POST['pno']);
            $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            //$profile_picture = mysqli_real_escape_string($conn, $_POST['image']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $new_img_name = "";
            //Upload a photo
            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $temp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];

            //do this with a usable method from methods.inc.php
            $recipe = new methods();
            $recipe -> uploadRecipeSellerImage($img_name, $img_size, $temp_name, $error, $new_img_name);
            // end of photo upload
            $recipe -> addRecipeSeller($name, $surname, $phone_number, $companyName, $email, $address, $new_img_name, $password);
        }
    ?>
    <div class="container" id="my-register">
        <center>
            <h3>This where you will register... </h3>
            <form action="#" method="post" onsubmit="return fieldsValidatation()" enctype="multipart/form-data">
                <div class="form-class">
                    <label for=""> Name </label><sup style="color:red">*</sup> <br>
                    <input type="text" name="name" id="name" placeholder=" WESI ">
                </div>
                <div class="form-class">
                    <label for=""> Surname </label><sup style="color:red">*</sup> <br>
                    <input type="text" name="surname" id=" ">
                </div>
                <div class="form-class">
                    <label for=""> Phone Number </label><sup style="color:red">*</sup> <br>
                    <input type="text" name="pno" id=" ">
                </div>
                <div class="form-class">
                    <label for=""> Company Name if Applicable </label><sup style="color:red">*</sup> <br>
                    <input type="text" name="companyName" id="companyName">
                </div>
                <div class="form-class">
                    <label for=""> Email Address </label><sup style="color:red">*</sup> <br>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-class">
                    <label for=""> Address </label><sup style="color:red">*</sup> <br>
                    <textarea name="address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-class">
                    <label for=""> Profile Picture </label><sup style="color:red">*</sup> <br>
                    <input type="file" name="image" id="image" value="Add File ">
                </div>
                <div class="form-class">
                    <label for=""> Password</label><sup style="color:red">*</sup> <br>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <div class="form-class">
                    <!-- <label for=""> Surname </label> <br> -->
                    <input type="submit" name="submit" id="submit" value="Register">
                </div>
            </form>
        </h3></center>
    </div>
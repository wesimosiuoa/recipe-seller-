<?php 
    include 'home-header.php';
    //require 'includes/methods.inc.php';
    require 'includes/dbcon.inc.php';
    //require 'success.php';
    $getID = $_GET['editid'];

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string ($conn, $_POST['name']);
        $surname = mysqli_real_escape_string ($conn, $_POST['surname']);
        $email = mysqli_real_escape_string ($conn, $_POST['email']);
        $pno = mysqli_real_escape_string($conn, $_POST['pno']);
        $recipeName = $_GET['editid'];

        $placeOrder = new methods();
        //$addSuccessfully = new successfulAndStaysAtSafeFIle();

        $placeOrder -> addOrder($name, $surname, $email, $pno, $recipeName);
    }
?>
<div class="container">
        <h3> Place <?php echo $getID?> Order Now !!! </h3>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="container"> 
                <div class="form-row">
                    <div class="col">
                        <label for=""> Add your name  <sup style="color: red">*</sup>  </label>
                        <input type="text" class="form-control" name = "name" placeholder=" Enter Name ...">
                    </div>
                    <div class="col">
                        <label for="">  Surname <sup style="color: red">*</sup> </label>
                        <input type="text" class="form-control" name = "surname" placeholder=" Enter price ... ">
                    </div>


                    </div>
                    <div class="form-row">

                        <div class="col">
                            <label for="">  Email  <sup style="color: red">*</sup> </label>
                            <input type="email" class="form-control" name = "email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col">
                            <label for="">  Phone Number   <sup style="color: red">*</sup> </label>
                            <input type="text" class="form-control" name = "pno" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input style="color: #ffffff; font-weight: bold; background-color: green" type="submit" name="submit" class="form-control" id="submit" value=" Place Order ">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>


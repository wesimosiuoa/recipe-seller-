<?php 
    include 'navigation.seller.php';
    //require 'includes/methods.inc.php';
    require 'includes/dbcon.inc.php';
?>
    <?php 
        if (isset($_POST['submit']) && isset($_FILES['image'])){
            $recipeName = mysqli_real_escape_string($conn, $_POST['recipeName']);
            $price = mysqli_real_escape_string($conn, $_POST['price']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $cookingMethod = mysqli_real_escape_string($conn, $_POST['cookingMethod']);

            //Upload a photo
            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $temp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];

            if ($error === 0) {
                # code...
                if ($img_size > 125000) {
                    # code...
                    echo "Your file is to big";
                }else {
                    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                    //echo $img_ext;
                    $img_ext_lc = strtolower($img_ext);
        
                    $allowed_exs = array('jpg', 'jpeg', 'png');
                    if (in_array($img_ext_lc, $allowed_exs)) {
                        # code...
                        $new_img_name =uniqid("IMG-", true).".".$img_ext_lc;
                        $img_upload_path = 'recipe-pics/'.$new_img_name;
                        move_uploaded_file($temp_name, $img_upload_path);

                        
        
                    }else {
                        echo "File not allowed";
                    }
                }
            }else {
                echo " An error occured !!!"; 
            }
            // photo upload ends here
            $recipe = new methods();
            $recipe -> addRecipe($recipeName, $price, $_SESSION['email'], $new_img_name, $description, $cookingMethod);
           
        }
    ?>
    <?php 
        include 'recipe-nav.php';
    ?>
    <div class="container">
        <h3> Add Recipe here </h3>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="container"> 
                <div class="form-row">
                    <div class="col">
                        <label for=""> Recipe Name <sup style="color: red">*</sup>  </label>
                        <input type="text" class="form-control" name = "recipeName" placeholder=" Enter Recipe Name ...">
                    </div>
                    <div class="col">
                        <label for="">  Price <sup style="color: red">*</sup> </label>
                        <input type="number" class="form-control" name = "price" placeholder=" Enter price ... ">
                    </div>


                    </div>
                    <div class="form-row">

                        <div class="col">
                            <label for="">  Recipe Display  <sup style="color: red">*</sup> </label>
                            <input type="file" class="form-control" name = "image" >
                        </div>
                        <div class="col">
                            <label for="">  upload a video  <sup style="color: red">*</sup> </label>
                            <input type="file" class="form-control" name = "video" >
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input style="color: #ffffff; font-weight: bold; background-color: green" type="submit" name="submit" class="form-control" id="submit" value=" Upload Video">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
<?php 
    include 'navigation.seller.php';
    //require 'includes/methods.inc.php';
    require 'includes/dbcon.inc.php';
?>
    <?php 
        if (isset($_POST['submit'])){
            $recipeName = mysqli_real_escape_string($conn, $_POST['recipeName']);
            $ingredientName = mysqli_real_escape_string($conn, $_POST['ingredientName']);
            $measurement = mysqli_real_escape_string($conn, $_POST['measurement']);

            $recipe = new methods();
            $recipe -> addRecipeIngredient($recipeName, $ingredientName, $measurement);
            
        }
    ?>
    <div class="container">
        <h3> Add ingredients here </h3>
        <form action="#" method="POST">
            <div class="container"> 
                <div class="form-row">
                    <div class="col">
                        <label for=""> Recipe Name <sup style="color: red">*</sup>  </label>
                        <!-- <input type="text" class="form-control" name = "recipeName" placeholder=" Enter Recipe Name ..."> -->
                        <select name="recipeName" class="form-control"id="">
                            <option value=""> </option>
                            <?php 
                                //check if name and email of the company match
                                $sql = "select recipeName from recipe where emailAddress = '".$_SESSION['email']."';";

                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <option value="<?php echo $row['recipeName']?>"><?php echo $row['recipeName']?></option>
                                        
                                    <?php
                                }
                            ?>

                        </select>
                    </div>
                    <div class="col">
                        <label for="">  Ingredient Name <sup style="color: red">*</sup> </label>
                        <input type="text" class="form-control" name = "ingredientName" placeholder=" Add Ingredient Name ... ">
                    </div>


                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="">  Ingredients Measurement  <sup style="color: red">*</sup> </label>
                            <!-- <input type="number" class="form-control" name = "price" placeholder=" Enter price ... "> -->
                            <input type="text" class="form-control" name = "measurement" placeholder=" Add Ingredient Measurement ... ">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input style="color: #ffffff; font-weight: bold; background-color: green" type="submit" name="submit" class="form-control" id="submit" value=" Add Ingredient ">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
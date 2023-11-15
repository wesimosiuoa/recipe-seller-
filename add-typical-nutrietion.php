<?php 
    include 'navigation.seller.php';
    //require 'includes/methods.inc.php';
    require 'includes/dbcon.inc.php';
?>
    <?php 
        if (isset($_POST['submit'])){
            $recipeName = mysqli_real_escape_string($conn, $_POST['recipeName']);
            $servingPer100ml = mysqli_real_escape_string($conn, $_POST['servingPer100ml']);
            $servingPer200ml = mysqli_real_escape_string($conn, $_POST['servingPer200ml']);
            $nutrient = mysqli_real_escape_string($conn, $_POST['nutrient']);

            $recipe = new methods();
            $recipe -> addRecipeTypicalNutrietion($nutrient, $servingPer100ml, $servingPer200ml, $recipeName);
            
        }
    ?>
    <div class="container">

        <h3>Add typical nutrition </h3>
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
                        <label for="">  Serving Per 100 ml <sup style="color: red">*</sup> </label>
                        <input type="number" class="form-control" name = "servingPer100ml" placeholder=" Serving per 100ml ... ">
                    </div>


                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="">  Serving Per 200 ml <sup style="color: red">*</sup> </label>
                            <!-- <input type="number" class="form-control" name = "price" placeholder=" Enter price ... "> -->
                            <input type="text" class="form-control" name = "servingPer200ml" placeholder=" Serving Per 200 ml ... ">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="">  Nutrient  <sup style="color: red">*</sup> </label>
                            <!-- <input type="number" class="form-control" name = "price" placeholder=" Enter price ... "> -->
                            <input type="text" class="form-control" name = "nutrient" placeholder=" Nutrient ... ">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input style="color: #ffffff; font-weight: bold; background-color: green" type="submit" name="submit" class="form-control" id="submit" value=" Add Nutrient ">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
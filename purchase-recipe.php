
    <style>
        .recipe img, .recipe2 img, .recipe3 img, .recipe4 img{
            width:100%;
            height: 200px;
        }
        .recipe, .recipe2, .recipe3, .recipe4{
            float: left;
            width: 20%;
            margin: 30px;
            border-radius: 10px;
            /* border: 1px solid red; */
        }
        .purchase-details {
            height: auto;
        }
    </style>

    <?php include 'home-header.php'?>
    <div class="purchase-details" style="margin: 0;">
    <?php 
        //require 'includes/methods.inc.php';
        $recipe = new methods();
        $recipe -> selectAllRecipesFromDB();
    ?>
        <!-- <div class="recipe">
            <img src="pc.jpeg" alt=" My Recipe ">
            <br>
            <div class="description">
                <h5> Lesheleshele La Lesotho </h5>
                <p>fdjkfjdfjdfjdkfjdkfjdkjfdkjfkdjfkdjfdkf jdkfjdkfkdfjdkfjdkfdkfjdkf dkfjdkfjdfjdkfjdkjfdkfjdkfjdkfd kfkdfkdfjdkfdjfdkjfdj</p>              
                
                <center>
                    <span style="color: red;"><em>LSL 100</em></span>
                    <br>
                    <button>Add to Cart </button>
                </center>
            </div>
        </div>
        <div class="recipe2">
            <img src="pc.jpeg" alt=" My Recipe ">
            <br>
            <div class="description">
                <h5> Lesheleshele La Lesotho </h5>
                <p>fdjkfjdfjdfjdkfjdkfjdkjfdkjfkdjfkdjfdkf jdkfjdkfkdfjdkfjdkfdkfjdkf  dkfjdkfjdfjdkfjdkjfdkfjdkfjdkfd kfkdfkdfjdkfdjfdkjfdj</p>              
                <center>
                    <span style="color: red;"><em>LSL 100</em></span>  
                    <br>  
                    <button>Add to Cart </button>
                </center>
            </div>
        </div>
        <div class="recipe3">
            <img src="pc.jpeg" alt=" My Recipe ">
            <br>
            <div class="description">
                <h5> Lesheleshele La Lesotho </h5>
                <p>fdjkfjdfjdfjdkfjdkfjdkjfdkjfkdjfkdjfdkf jdkfjdkfkdfjdkfjdkfdkfjdkf  dkfjdkfjdfjdkfjdkjfdkfjdkfjdkfd kfkdfkdfjdkfdjfdkjfdj</p>              
                <center>
                    <span style="color: red;"><em>LSL 100</em></span>
                    <br>    
                    <button>Add to Cart </button>
                </center>
            </div>
        </div>
        <div class="recipe4">
            <img src="pc.jpeg" alt=" My Recipe ">
            <br>
            <div class="description">
                <h5> Lesheleshele La Lesotho </h5>
                <p>fdjkfjdfjdfjdkfjdkfjdkjfdkjfkdjfkdjfdkf jdkfjdkfkdfjdkfjdkfdkfjdkf  dkfjdkfjdfjdkfjdkjfdkfjdkfjdkfd kfkdfkdfjdkfdjfdkjfdj</p>              
                <center>
                    <span style="color: red;"><em>LSL 100</em></span>
                    <br>
                    <button>Add to Cart </button>
                </center>
            </div>
        </div> -->
        <!-- <center> <h3>END OF RECIPES </h3></center>  -->
    </div>

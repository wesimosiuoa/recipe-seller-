
<?php 
    class successfulAndStaysAtSafeFIle{
        function errorMessage($msg){
            ?>
                <script >
                    function closeMyRegister(){
                        document.getElementById("msg").style.display = "none";

                    }
                    function openMyRegister(){
                        document.getElementById("msg").style.display = "block";

                    }
                </script>
                <style>

                    /* respond on small devices */
                    @media only screen and (min-width: 700px){
                        .msg{
                            width: 100%;
                            margin-left:0%;
                        }
                        .msg button{
                            width: 100%;
                        }
                    }
                    .msg{
                        height: auto;
                        width:50%;
                        text-align: center;
                        margin-left: 25%;
                        font-weight: 0;
                        border: 1px #04AA6D solid;
                        border-radius: 5px;
                        margin-top: 40px;
                        background-color: #04AA6D;
                        color: #ffffff; 
                        margin-bottom: 40px;
                    }
                    .msg button{
                        background-color: red;
                        border: none;
                        color: white;
                        padding: 16px 32px;
                        text-decoration: none;
                        margin: 4px 2px;
                        cursor: pointer;
                        padding: 20px;
                        font-weight: bold;
                        margin:20px;
                        width: 50%;
                    }.msg h3{
                        color: red;
                        font-size: 30px;
                    }
                </style>
                <div class="msg" id="msg">
                    <br>
                    <h3> Message !!! </h3>
                    <p> <?php echo $msg; ?> </p>

                    <form action="#">
                        <button type="submit" name="submit" onclick="closeMyRegister()"> OK </button>
                    </form>
                </div>
            <?php
        }
        function addIngriedents($msg){
            ?>
                <script >

                    function openMyRegister(){
                        document.getElementById("msg").style.display = "block";

                    }
                </script>
                <style>

                    /* respond on small devices */
                    @media only screen and (min-width: 700px){
                        .msg{
                            width: 100%;
                            margin-left:0%;
                        }
                        .msg button{
                            width: 100%;
                        }
                    }
                    .msg{
                        height: auto;
                        width:50%;
                        text-align: center;
                        margin-left: 25%;
                        font-weight: 0;
                        border: 1px #04AA6D solid;
                        border-radius: 5px;
                        margin-top: 40px;
                        background-color: #04AA6D;
                        color: #ffffff; 
                        margin-bottom: 40px;
                    }
                    .msg button{
                        background-color: red;
                        border: none;
                        color: white;
                        padding: 16px 32px;
                        text-decoration: none;
                        margin: 4px 2px;
                        cursor: pointer;
                        padding: 20px;
                        font-weight: bold;
                        margin:20px;
                        width: 50%;
                    }.msg h3{
                        color: red;
                        font-size: 30px;
                    }
                </style>
                <div class="msg" id="msg">
                    <br>
                    <h3> Message !!! </h3>
                    <p> <?php echo $msg; ?> </p>
                    <a href="add-ingriedent.php" style="color: red; font-weight: bold;"> Add Ingredients to your recipe ingriedents </a>
                </div>
            <?php
        }
        function addTypicalNutrition($msg){
            ?>
                <script >

                    function openMyRegister(){
                        document.getElementById("msg").style.display = "block";

                    }
                </script>
                <style>

                    /* respond on small devices */
                    @media only screen and (min-width: 700px){
                        .msg{
                            width: 100%;
                            margin-left:0%;
                        }
                        .msg button{
                            width: 100%;
                        }
                    }
                    .msg{
                        height: auto;
                        width:50%;
                        text-align: center;
                        margin-left: 25%;
                        font-weight: 0;
                        border: 1px #04AA6D solid;
                        border-radius: 5px;
                        margin-top: 40px;
                        background-color: #04AA6D;
                        color: #ffffff; 
                        margin-bottom: 40px;
                    }
                    .msg button{
                        background-color: red;
                        border: none;
                        color: white;
                        padding: 16px 32px;
                        text-decoration: none;
                        margin: 4px 2px;
                        cursor: pointer;
                        padding: 20px;
                        font-weight: bold;
                        margin:20px;
                        width: 50%;
                    }.msg h3{
                        color: red;
                        font-size: 30px;
                    }
                </style>
                <div class="msg" id="msg">
                    <br>
                    <h3> Message !!! </h3>
                    <p> <?php echo $msg; ?> </p>
                    <a href="add-typical-nutrietion.php" style="color: red; font-weight: bold;"> Add Typical nutrietion to your recipe </a>
                </div>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css' rel='stylesheet'> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body{
            font-family: Tahoma;
        }
    </style>
    <div class="register-div">
        <style>
            h4{text-align: center}
        </style>
        <h4>Get Started with Us, Register on our online portal to sell your recipes online and make cash. </h4>

        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="container"> 
                <div class="form-row">
                    <div class="col">
                        <label for=""> First Name  </label>
                        <input type="text" class="form-control" name = "first_name" placeholder= "First Name">
                    </div>
                </div>
            <div class="form-row">
                <div class="col">
                    <label for=""> Last Name  </label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                </div>
            </div>
                <div class="form-row">
                    <div class="col">
                        <label for=""> Email Address  </label>
                        <input type="text" class="form-control" name = "email" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for=""> Profile Picture  </label>
                        <input type="file" name="profile" class="form-control" placeholder="logo">

                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for=""> Phone Number </label>
                        <input type="tel" class="form-control" name="pno" placeholder="Phone Number">
                     </div>
                </div>
                <div class="form-row">
                    <label for=""> Company Name </label>
                    <input type="text" name="companyName" class="form-control" placeholder=" Add your company if you have it." id="">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for=""> Address </label>
                        <textarea name="address" class="form-control" cols="10" rows="5" placeholder=" Add your physical address here ..."></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <button type="submit" name="submit" class="btn btn-primary" id="edit">Register</button>
                </div>
                <br>
                <style>
                    span{
                        color: red;
                    }
                </style>
                
                <br>
            </div>
        </form>
    </div>
</body>
</html>
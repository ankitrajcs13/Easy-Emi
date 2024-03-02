<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <title>Mobiles- Easy EMI </title>
    <link rel="shortcut icon" href="images/icon-logo.ico">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="<link rel=" preconnect " href="https://fonts.gstatic.com ">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap " 
    rel="stylesheet ">
    <link rel="stylesheet " href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
    
</head>

<body>
    
    
        <div class="container ">
            <div class="navbar ">
                <div class="logo ">
                    <img src="images/logo.png " width="125px " alt="logo ">
                </div>
                <nav>
                    <ul id="MenuItems ">
                        <li><a href="index.html ">Home</a></li>
                        <li><a href="mobiles.html ">Products</a></li>
                        <li><a href=" ">About</a></li>
                        <li><a href=" ">Contact</a></li>
                        <li><a href="login.html ">Account</a></li>
                    </ul>
                </nav>
                <img src="images/cart.png " width="30px " height="30px " alt=" ">
                <img src="images/menu.png " class="menu-icon " 
                onclick="menutoggle() ">
            </div>
            

        </div>
    
<!-- -----------account-page--------  -->
<form   >
<div class="account-page ">
    <div class="container ">
        <div class="row ">
            <div class="col-2 ">
                <img src="images/image1.png " width="100% ">
            </div>
            <div class="col-2 ">
                <div class="form-container ">
                   
                    <div class="form-btn ">
                        <span>Signup</span>
                        <hr id="Indicator ">
                    </div>
                        <form  action="in.php " method="POST " >
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="c_name" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="email">Mobile</label>
                            <input type="phone" name="mobile " class="form-control" id="mobile" aria-describedby="emailHelp"> 
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>



                       <!-- <input type="text " placeholder="Name " name="c_name ">
                        <input type="phone " placeholder="Mobile number " name="mobile ">
                        <input type="password " placeholder="password " name="pass ">
                        <input type="password " placeholder="confirm password " name="c_pass ">
                        <br>
                        <button type="submit " class="btn btn-primary " >Register</button>-->
                        
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<!-- php code  -->


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $c_name = $_POST['c_name'];
        $mobile = $_POST['mobile'];
       
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "easyemi";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql_query= "INSERT INTO 'signup_user'('first_name', 'phone') values ('$c_name','$mobile')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>








 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



















    <!-- -------footer------ -->
    <div class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="footer-col-1 ">
                    <h3>Download our App</h3>
                    <p>Dowload app for Android and ios for better experience</p>
                    <div class="app-logo ">
                        <img src="images/play-store.png ">
                        <img src="images/app-store.png ">
                    </div>
                </div>
                <div class="footer-col-2 ">
                    <img src="images/logo-white.png ">
                    <p>Get your products at no cost EMI with Easy EMI</p>
                </div>
                <div class="footer-col-3 ">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blogs</li>
                        <li>Returns</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4 ">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>LinkedIn</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright ">
                <i class="fa fa-copyright "></i> Copyright 2020- EasyEMI</p>
        </div>
    </div>
    <!-- --------js for toggle menu-------- -->
    <script>
        var MenuItems = document.getElementById(" MenuItems ");

        MenuItems.style.maxHeight = "0px ";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px ") {
                MenuItems.style.maxHeight = "200px "
            } else {
                MenuItems.style.maxHeight = "0px "
            }

        }
    </script>


    
    </body>

</html>
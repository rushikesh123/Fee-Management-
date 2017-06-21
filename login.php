


   
<html lang="eu">

<head>
    <title>Login Page</title>
    <link rel="shortcut icon" href="">
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url(aaaa.jpg);
        }
        
        div#nextbox {
            height: 5.3em;
        }
        
        
        input#inputreset {
            color: white;
            font-size: 18px;
            padding: 10px;
            margin: 20px auto;
            margin-top: 0px;
            border: 0px;
            background: orange;
            width: 80px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input#inputsubmit {
            color: white;
            font-size: 18px;
            padding: 10px;
            margin: 20px auto;
            margin-top: 0px;
            border: 0px;
            background: #0098cb;
            width: 80px;
            border-radius: 5px;
            cursor: pointer;
        }  
    </style>

</head>

<body style="background-color:#F0FFFF;">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

            if(isset($_POST['submit'])){ 
                $adm_email = mysqli_real_escape_string($con,$_POST['adm_email']); 
                $adm_password = mysqli_real_escape_string($con,$_POST['adm_password']); 
                 
                $sel = "select * from add_admin where email='$adm_email' AND password='$adm_password'"; 
                $run = mysqli_query ($con,$sel); 
                $check_user = mysqli_num_rows($run); 
                 
                if($check_user==0){ 
                    echo "<script>alert('Wrong Email or Password!');</script>"; 
                } else { 
                    $_SESSION['adm_email']=$adm_email; 
                    echo "<script>window.open('adminpanel.php','_self');</script>"; 
                } 
            }

?>


<div class="container">
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="page-header" >
                <br>
            <h1 style="text-align:center;">Fee Management System<br></h1>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <br><br>
                    <li class="active"><a href="login.php" style="color:black;font-size:150%">Home</a></li>

                </ul>
            </div>
        </div>
    </nav>

</div>

<div class="container">
    
 <div class="row">
   
   <div class="col-sm-6">
          <div class="jumbotron">
          
          <!-- Admin Login start -->
         <form action="login.php" method="post" style="margin-left:23px;" class="form-inline" role="form">
        <h2>Admin Login Form</h2>
        <br>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="adm_email" placeholder="enter email-id" id="email1">
        </div>
        <br>
        <br>
        <br>
        <div style="margin-left:29px;" class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="adm_password" placeholder="enter password" id="pwd1">
        </div>
        <br>
        <br>
        <input style="margin-left:127px;" id="inputreset" type="reset">
        <input id="inputsubmit" type="submit" value="Submit" name="submit">
        <div style="margin-left:123px;">
              <a href="addadmin.php">New Admin SignUp Here ?</a>
        </div>
    </form>
                <!-- Admin Login end -->

    </div>
 </div>
   
   <div class="row">
      <div class="col-sm-6">
           <div class="jumbotron">
         <form style="margin-left:23px;" class="form-inline" role="form">
        <h2>Accountant Login Form</h2>
        <br>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="enter email-id" id="email2">
        </div>
        <br>
        <br>
        <br>
        <div id="nextbox" style="margin-left:29px;" class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="enter password" id="pwd2">
        </div>
        
    <br>
        <input style="margin-left:127px;margin-top:0px;" id="inputreset" type="reset">
        <input id="inputsubmit" type="submit" value="Submit" name="submit2">
    </form>
   </div>
      </div>
   </div>
   
</div>
    </div>
</body>

</html>
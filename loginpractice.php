

   
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
			font-family: 'Comfortaa',cursive;
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

 ?>


<div class="container">
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="page-header" >
                <br><hr>
            <h1 style="text-align:center; color:#0066FF;">Fee Management System<br></h1>
            </div>
            
        </div>
    </nav>

</div>

<div style="margin-left:150px;" class="container">
	<div class="col-lg-6">
		<div class="container">
    
 <div class="row">
   
   <div class="col-sm-6">
          <div class="jumbotron">
          <hr><br>
         <h3 style="margin-left:30px;">Click Below To Login As Admin</h3> 
         <br>
         <h3><a  style="margin-left:123px;" href="adminlogin.php">Admin Login</a></h3>
         <br>
        <div style="margin-left:123px;">
              <a href="addadmin.php">New Admin SignUp Here ?</a>
        </div>
<hr>
    </div>
 </div>
   
   
</div>
    </div>
	</div>
	<div class="col-lg-6">
		<div class="container">
    
 <div class="row">
   
   <div class="col-sm-6">
          <div class="jumbotron">
          <hr>
          <br>
         <h3 style="margin-left:30px;">Click Below To Login As Accountant</h3> 
         <br>
         <h3><a  style="margin-left:123px;" href="accountantlogin.php">Accountant Login</a></h3>
         <br>
       <br>
<hr>
    </div>
 </div>
   
   
</div>
    </div>
	</div>
</div>

</body>

</html>











    
    

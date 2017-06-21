<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);



 if(isset($_POST['submit'])){ 
                $acc_email = mysqli_real_escape_string($con,$_POST['acc_email']); 
                $acc_password = mysqli_real_escape_string($con,$_POST['acc_password']); 
                 
                $sel = "select * from add_accountant where email='$acc_email' AND password='$acc_password'"; 
                $run = mysqli_query ($con,$sel); 
                $check_user = mysqli_num_rows($run); 
                 
                if($check_user==0){ 
                    echo "<script>alert('Wrong Email or Password!');</script>"; 
                } else { 
                    $_SESSION['acc_email']=$acc_email; 
                    echo "<script>window.open('accountantpanel.php','_self');</script>"; 
                } 
            }

?>


<html lang="eu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"> 
   <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
	  
		body {
			background-image: url(aaaa.jpg);
			margin: 0px;
			padding: 0px;
			font-family: 'Comfortaa',cursive;
		}
		
		input[type="email"], input[type="password"] {
			outline: none;
			padding: 10px;
			display: block;
			width: 300px;
			border-radius: 3px;
			border: 1px solid #eee;
			margin: 20px auto;
		}
		
		input[type="submit"]{
			padding: 10px;
			color: #fff;
			background: #0098cd;
			width: 80px;
			margin: 20px auto;
			margin-top: 0px;
			border: 0px;
			border-radius: 3px;
			cursor: pointer;
			
		}
		
		input[type="reset"]{
			padding: 10px;
			color: #fff;
			background: orange;
			width: 80px;
			margin: 20px auto;
			margin-top: 0px;
			border: 0px;
			border-radius: 3px;
			cursor: pointer;
			margin-left: 420px;
		}
		
	</style>
	</head>
	
	<body>
		
		<div class="container">
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="page-header" >
            <h1 style="text-align:center;color:blue;"><a href="loginpractice.php">Fee Management System</a><br></h1>
			</div>
        <h3 style="text-align:center;">Accountant Login Here<br></h3>
        </div>
    </nav>

</div>
	
	<div class="container">
	<div class="jumbotron">
		 <form action="accountantlogin.php" method="post">
	 	<input type="email" placeholder="enter your email" name="acc_email" autocomplete="off">
	 	<input type="password" placeholder="enter your password" name="acc_password">
	 	<input type="reset">
	 	<input type="submit" value="submit" name="submit"> 
	 </form>
	</div>
	</div>
		
	</body>
	
	 <script src="js/jquery.min.js"></script>
     <script src="js/jquery.dataTables.js"></script>
</html>

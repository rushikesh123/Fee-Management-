
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);
?>

<?php
$query = "SELECT * FROM add_admin";
$result = mysqli_query($con,$query);
?>



<html lang="eu">
<head>
    <meta charset="utf-8">
    
     <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"> 

    
    <title>View Accountant</title>
    <style>
        body {
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
        
        
        div#divtable {
            color: white;
            font-size: 20px;
			border-style: solid;
			border-color: black;
			border: 1px solid;

		}
		
		thead {
			font-family: sans-serif;
			text-align: left;
			font-weight: 700;
			font-size: 24px;
			
		}
		
		
    </style>

</head>

<body>
   
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
             <a class="navbar-brand" href="#">Fee Report</a> </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="addstudent.php">Add Accountant</a></li>
                <li class="active"><a href="#">View Accountant</a></li>
                <li class="active"><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
   
   <br><br>
   
   <div class="table-responsive">
       
   <div id="divtable" class="container">
      
      <div class="row">
          <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                </tr>
            </thead>
            
            <?php
    while($row = mysqli_fetch_array($result))
              {
                  echo '
                  <tr>
                  <td>'.$row["name"].'</td>
                    <td>'.$row["email"].'</td>  <td>'.$row["password"].'</td>
                  </tr>
                  ';
              }
              ?>
          
          </table>
      </div>
        
   </div>
   </div>

<?php

$con->close();
?>            


 <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <script src="js/app.js"></script>

</body>

</html>
  
   
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fee";
// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

?>
   

   <html lang="eu">
    <head>
        
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    
     <style>
         body {
             background-image: url(aaaa.jpg);
         }
         
         button {
             margin-left: 6em;
         }
         
          input#reset {
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
        
        input#submit {
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
    
    <body>
          <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fee Report</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="accountantpanel.php">Home</a></li>
        <li class="active"><a href="#">Add Student</a></li>
        <li class="active"><a href="viewstudent.php">View Student</a></li>
        <li class="active"><a href="duefees.php">Due Fee</a></li>
       
        <li class="active"><a href="accountantlogut.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
   
  <div class="container">
      <div>
      <div  class="col-sm-4">
      
       <form role="form" action="addstudent.php" method="post">
        <div class="form-group">
    <label for="name">Name :</label>
    <input type="text" class="form-control" id="name" required name="stu_name" placeholder="enter name">
    
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" required name="stu_email" placeholder="enter email-id">
    
  </div>
  <div class="form-group">
    
    
   <label class="radio-inline">
      <input type="radio" name="stu_gen" value="M">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="stu_gen" value="F">Female
    </label>

 <br> <br>
  <div class="form-group">
  <label for="sel1">Select Course:</label> 
  <select class="form-control" id="sel1" name="stu_lang">
    <option value="java">JAVA</option>
    <option value="python">PYTHON</option>
    <option value="cpp">C++</option>
    <option value="c">C</option>
  </select>
   </div>
    
   <!--------------------->
   
   
  <div class="form-group">
    <label for="fee">Fees:</label>
    <input type="number" class="form-control" id="email" required name="stu_fees" placeholder="enter fees" maxlength="6">
  </div>
  <div class="form-group">
    <label for="pwd">Paid:</label>
    <input type="number" class="form-control" id="pwd" required name="stu_paid" placeholder="enter fee paid">
  </div>
   
 <div class="form-group">
  <label for="address">Address:</label>
  <textarea class="form-control" rows="5" id="address" required name="stu_addr" placeholder="enter address"></textarea>
</div>
  
   <div class="form-group">
    <label for="pwd">Contact No:</label><input type="number" class="form-control" id="cno" required name="stu_cno" placeholder="enter contact no">
  </div>
  <br>
   <input type="reset" id="reset">
  <input style="margin-left:10em;" type="submit" name="submit" value="submit" id="submit">

</div>

</form>
  
  <!-- Php part work here --> 
   <?php
if(isset($_POST['submit'])){
    
$name = $_POST['stu_name'];
$email = $_POST['stu_email'];   
$gender = $_POST['stu_gen'];
$lang = $_POST['stu_lang'];
$fees = $_POST['stu_fees'];
$paid = $_POST['stu_paid'];
$addr = $_POST['stu_addr'];
$cno = $_POST['stu_cno'];

    
   $submit = "INSERT INTO add_student (name, email, gender, lang, fees, paid, address, contactno) VALUES('$name','$email','$gender','$lang','$fees','$paid','$addr','$cno')";
    $run=mysqli_query($con,$submit);
    if($run){
        echo "Student Added succesfully";
    }

}

$con->close();
?>   
   
<!-- Php part work here --> 

    
      </div>
      </div>
  </div>
   
   
   
   
    </body>
    
</html>
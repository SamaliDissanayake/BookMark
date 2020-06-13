<!DOCTYPE html>

<?php
 include "log.php";
 session_start();


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    <title> Create Account</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <link href="image/icon.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style2.css">

    <style>
/*...................................................................................................*/
.login_img{
  margin-top: -20px; 
  background-image: url("image/image2.jpg");
  height: 620px;

}
.btn{
  margin-top:80px;
  border-radius:10px;
  margin-right:20px;
}

  .modal-header, h4, .close {
    background-color: white;
    color:red !important;
    text-align: center;
    font-size: 30px;
    
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>

    
  </head>

  <body >
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="image/logo.png" width="175px" height="32px"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
     
    </ul>
    
      
      <button class="btn btn-outline-success my-2 my-sm-0" id="myBtn">Login</button>
    
  </div>
</nav>
    <section>
      <div class="login_img"><br>
     

    <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        
      </div>
<!--Create Account-->
      <div class="jumbotron">
        <h2>Create Account</h2><br>

        
        <form id="myForm" method="POST" action=#>
       
          <div class="form-group">
            
            <input type="text" class="form-control"  placeholder=" Enter User Name" id="username" name="username" required="required"> 
          </div>
          <div class="form-group">
           
            <input type="password" class="form-control"  placeholder=" Enter  Password" id="pass" name="pass" required="required">
          </div>
          <div class="form-group">
           
            <input type="password" class="form-control"  placeholder=" Confirm  Password" id="confirmpass" name="confirmpass" required="required">
          </div>
          <div class="form-group">
           
            <input type="text" class="form-control"  placeholder=" Enter  Email Address" id="email" name="email" required="required">
          </div>
          <div class="btn">
         <button type="submit" class="btn btn-success btn-lg" data-toggle="modal" name="submit" >Submit</button> 
                   
                    
</div>
        </form>
      </div>

      </div> 
      <script>
      var password=document.getElementById("pass");
      var confirmPass=document.getElementById("confirmpass");

      function validatePassword(){
        if(password.value!=confirmPass.value){
          confirmPass.setCustomValidity("Password Don't match")
        }
        else{
          confirmPass.setCustomValidity('');
        }
      }
      password.onchange=validatePassword;
      confirmPass.onkeyup=validatePassword;

      </script>
<!--Sign Up button-->

<div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:30px 50px ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" id="myForm" method="POST">
            <div class="form-group">
              <label for="usrname"> Username</label>
              <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"> Password</label>
              <input type="text" class="form-control" id="psw" name="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div><br><br>
              <button type="submit" class="btn btn-success btn-lg" name="login"> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          
          
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
<?php
if(isset($_POST['login'])){
  $_SESSION['usrname']=$_POST['usrname'];
}

?>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>



<!--Php code for submit  button-->                      
<?php
	

	if(isset($_POST['submit'])){
   
    $user = $_POST['username'];
		$password = $_POST['pass'];
    $email = $_POST['email'];

		

  $dbconect=mysqli_connect('localhost','root','','bookmark');
  if(!$dbconect)
{
	die("connection fail".mysqli_connect_error());
}

else
{
	echo "Connected Successfully.";
}

	$count=0;
	$sqll="SELECT username FROM user";

	$res=mysqli_query($dbconect,$sqll);

	while ($row=mysqli_fetch_assoc($res)) 
	{
		if($row['username']==$_POST['username'])
		{
			$count=$count+1;
		}
	}

	if($count==0)
	{

		$sql=mysqli_query($dbconect,"INSERT INTO user(username,password,email)VALUES('$user','$password','$email')");
			
	?>

	<script type="text/javascript">
		alert("Regestation Sucessfully");
	</script>
	<?php
	}
	else{
		?>

		<script type="text/javascript">
		alert("UserName already exist");
	</script>
<?php
	}
}
?>
    
    
  </body>
</html>
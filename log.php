<?php
session_start();


	$con=mysqli_connect('localhost','root','','bookmark');

   
  if(isset($_POST['login']))
  {
    $uname=$_POST['usrname'];
    $pass=$_POST['psw'];
    
  

    if(empty($uname)||empty($pass))
    {
        echo  "Please fill the blanks";
    }
    else
        {

        $query="select * from user where username='$uname'";
        $result=mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result))
          {
            $db_password=$row['password'];
            
            if($pass==$db_password)
            {
                $_SESSION['username']=$uname;
                header("location:bookMark.php");
                session_destroy();
              
            }
            else{
              echo "Incorrect password";
            }

          }
        else{
          echo"please check";
        }
    }
   
  }

 /* if ( isset( $_POST['btn_login'] ) ){

    if(!empty($_POST['remember']))
       {
           setcookie("username",$_POST["userName"],time()+60*60);
           setcookie("password",$_POST["password"],time()+60*60);
       }
       else{
           if(isset($_COOKIE["username"])){
               setcookie("username"," ");
           }
           if(isset($_COOKIE["password"])){
               setcookie("password"," ");
           }
       }
       
   }*/
	?>
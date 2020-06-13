<?php
session_start();
$user= $_SESSION['username'];



if(isset($_POST['submit'])){
   
   
   $name=$_POST['siteName'];
   $url=$_POST['siteUrl'];

    

  $conn=mysqli_connect('localhost','root','','bookmark');
  
  $sql = "INSERT INTO  bookmark(username,siteName,url)
  VALUES ('$user','$name','$url');";

      if(mysqli_query($conn,$sql)){
          echo "New record crested sucessfully";
          }
      else
      {
          echo "Error".mysqli_error($conn);
      }
   

}
?>
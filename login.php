<?php
 include "log.php";



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bookmarker</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="log.php">
    <style>
/*...................................................................................................*/
.login_img{
  margin-top: 0px; 
  background-image: url("image/3.jpg");
  height: 420px;

}
      </style>
  </head>

  <body>
    <section>
      <div class="login_img"><br><br>

    <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">Bookmarker</h3>
      </div>

      <div class="jumbotron">
        <h2>Bookmark Your Favorite Sites</h2>

        <h4>Log In</h4>
        
        
        <form id="myForm" method="POST" action="">
          <div class="form-group">
            
            <input type="text" class="form-control" id="siteName" placeholder=" Enter User Name" name="username" required>
          </div>
          <div class="form-group">
            
            <input type="password" class="form-control" id="siteUrl" placeholder=" Enter Websit Password" name="password" >
          </div>
          <button type="submit" class="btn btn-primary" name="btn_login" >Log in</button>
         <a href="regestation.php"> <input class="btn btn-secondary" type="button" value="Create Account" ></a>

         <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
        </form>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults"></div>
        </div>
      </div>
  
  
    </div>
  <section>

      <footer class="footer">
        <p>&copy; 2020 Bookmarker, Inc.</p>
      </footer>

    </div> <!-- /container -->
    
   
  </body>
</html>
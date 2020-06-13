
<?php
session_start();

require  'DbConnect.php';
echo "welcome".$_SESSION['usrname'];

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
  </head>
<body>

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


  <!--body onload="fetchBookmarks()"-->

   <!-- <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">Bookmarker</h3>
      </div>

      <div class="jumbotron">
        <h2>Bookmark Your Favorite Sites</h2>
        <form id="myForm" method="POST" action="bookTable.php">
          <div class="form-group">
            <label>Site Name</label>
            <input type="text" class="form-control" id="siteName" placeholder=" Enter Website Name" name="siteName">
          </div>
          <div class="form-group">
            <label>Site URL</label>
            <input type="text" class="form-control" id="siteUrl" placeholder=" Enter Website URL" name="siteUrl">
          </div>
          <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
        </form>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults"></div>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2020 Bookmarker, Inc.</p>
      </footer>

    </div> <!-- /container -->
    <div class="col-md-10 content">
         <div class="panel panel-success">
             <div class="panel-heading">
                    Add Bookmark
             </div>
              <div class="panel-body">                
                <div class="container-fluid">                  
                    <div class="col-md-6">
                        <div class="form_main">
                                <h4 class="heading"><strong>Add </strong> Bookmark <span></span></h4>
                            <div class="form">
                                <form method="get" id="contactFrm" name="addFrm">
                                  <div class="form-group">
                                    <input type="text" required placeholder="Name" value="" name="name" 
                                    class="form-control">
                                  </div>
                                  <div class="form-group">  
                                    <input type="text" required placeholder="URL" value="" 
                                    name="url" id="url" class="form-control" onBlur="change_url(this);">
                                  </div>  
                                  <div class="form-group">
                                    <input type="text" required placeholder="Category" value="" name="category" 
                                    id="category" class="form-control">
                                  </div>  
                                    <input type="submit" value="Submit" name="Submit" class="btn btn-success">
                                </form>
                            </div>
                         </div>
                     </div>	              
               </div>
            </div>
 

    <script>
    src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--script src="js/main.js"></script-->

 <?php
 



 ?>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width">
    <link href="image/icon.png" rel="icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style2.css">
    <style>
.mySlides {display:none;}


.jumbotron{
    height:180px;
    width:1200px;
    margin-left:60px;
    margin-top:10px;
}
</style>
</head>
   </head>
<body>
</head>

<body>

<!--Navigation Bar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="image/logo.png" width="175px" height="32px"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">What We Do</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Development Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
     
    </ul>
    
      
    <a href="login.php"> <button class="btn btn-outline-success my-2 my-sm-0">Login</button></a>
    
  </div>
</nav>
  <!--Image slide show-->         
  
  
  <div class="w3-content w3-section" style="max-width:100%">
   <div class="container">
  <img class="mySlides" src="image/image1.jpg" style="width:100%">
 <a href="regestation.php"> <button type="submit" class="btn btn-success btn-lg" data-toggle="modal" 
                    data-target="#alertnew">
                    Get Started</button> </a>


  <img class="mySlides" src="image/image1.jpg" style="width:100%">
  
</div>            
 
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div class="jumbotron">
    	<div class="container text-center">
       	  <h1><span class="jumbo">Online Bookmark Manager !</span></h1>
            <p><span class="jumbopara">Keep in touch with your bookmarks, Anywhere.. Anytime.. 
            It's easy as that !</span></p>                        
        </div>
    </div>  
    
    <hr id="whatwedo">

    <section class="whatwedo">  
     
   	  <div class="container-fluid text-center whatwedoTopic">
      	<div class="row" style="color:green; margin-right:500px">
        	<div class="col-lg-12">
            	What We Do
            </div>
        </div>
      </div> 
   
      <div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-4 col-lg-offset-2 lead text-center text-justify"> 
            	You are using many devices and different browsers everyday to surf Internet. You often loose your 	                bookmarks when needed by switching your devices and browsers. 
            </div>
            <div class="col-lg-4 lead text-center text-justify">
                MyBookmark.Online is the Ideal Solution for this. You just need to Create a account with us and 
                bookmark your webpages. Never loose your bookmarks anymore.
            </div>
        </div>
      </div>
   </section>

   
    
</body>


</html>
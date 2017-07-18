<!DOCTYPE html>
<html>
<head>
	<title>Search</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.index ,.index1{
font-size: 25px;
}

</style>

</head>
<body style="background-image:url(image.jpg);">
   <!-- nav bar session-->
    <nav class= "navbar navbar-inverse">
     <div class="container-fluid">
    <div class="navbar-header"> 
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target='#data-navbar-collapse'>
   <span class="sr-only"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
      <a class=" navbar-brand" href="#"> Searching point</a>
      </div>
    <div class="collapse navbar-collapse" id="data-navbar-collapse">

    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#contact"><b>Contact</b></a></li>
      <li><a href="#news"><b>News</b></a></li>
       <li><a href="#about"><b>about</b></a></li>
    </ul>
      <form class="navbar-form navbar-center" role="search">
         <div class="form group">
          <input type="text" class=" form-control" size="30" placeholder="search....." name="search">           
           <button type="submit" class=" btn btn-default">search</button>
            <p class="navbar-text navbar-right"> signed in as user 
            <a href='signin.php' style='color:white'>
           <span class='glyphicon glyphicon-off '>&ensp;
               </span>Logout</a></p>
                </div>
      </form>
            </div>
</div>
         
  </nav>

<div class="container" style="background-color:pink;">
<div class="row">
<div class="col-lg-6" col-md-6 col-sm-12 col-xs-12">



<center><h1 style="background-color:red;">Select your Language:-</h1>

</center>
<div class="index"> 
<form action=" hj.php" method="post">
 
<input type="radio" name="lang" value="html" checked>html
	<br>

	<input type="radio" name="lang" value="css">css
	<br>
	
<input type="radio" name="lang" value="php">php
	<br>

	<input type="radio" name="lang" value="java">java
	<br>
 
</div>
<center>  <h2 style="background-color:red;">
   	Select the mode of study:-</h2>
   </center>
<div class="index1">	
<input type="radio" name="mode" value="video" checked>videos
	<br>

	<input type="radio" name="mode" value="ebook">e-book
	<br>

	<input type="radio" name="mode" value="notes">College-Notes
	<br>

	<input type="radio" name="mode" value="text">Text
	<br>

</div>
<br/>	

<button type="submit" class="btn btn-primary" name="submit">Search</button>
  
 

</form>
</form>


</div></div>
</div></body>
</html>
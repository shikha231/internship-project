<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body  style="background-image:url(image.jpg);">
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
            <a href='userlogout.php' style='color:white'>
           <span class='glyphicon glyphicon-off '>&ensp;
               </span>Logout</a></p>
                </div>
      </form>
            </div>
</div>
         
  </nav>
<div class="container">
 
<div class="row">
<div class="col-lg-offset-3 col-md-offset-3 col-sm-6 col-xs-12">
<div class ="panel panel-danger">
<div class="panel panel-heading" style="alignment-adjust: ">
<h2 class="panel-title"> <h2>login form</h2>
 </h2>
 </div>
<div class="panel panel-body">
<form action='#' method='post'>

<div class="form-group">

      <label for="email">Email:</label>
    
  <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
 
   </div>

<div class="form-group">
 
     <label for="pss">Password:</label>
  
    <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
   
 </div>



  <button type="submit" name=submit class="btn btn-primary">login</button>
   
  
</form>
</div>
 </div>
</div></div>
</div>



<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('search') or die(mysql_error());
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 if($email!=''&&$pass!='')
 {
   $query=mysql_query("select * from registration where email='".$email."' and password='".$pass."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['email']=$name;
    header('location:hh.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</body>
</html>


      
            


               
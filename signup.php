

<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>Registration </title>
 
 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
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
                            <h2 class="panel-title"> <h2>Registration form</h2>
 </h2>
                            </div>
<div class="panel panel-body">
 <form action="reg.php" method="post">
   
 <div class="form-group">
   
   <label for="name">Name:</label>
  
    <input type="name" class="form-control"  placeholder="Enter Name" name="name" required>

    </div>    

    <div class="form-group">
  
    <label for="mobile number">Mobile Number:</label>
    
  <input type="mobile number" class="form-control"  placeholder="Enter mobile number" name="mobile" required>

    </div>
 
   <div class="form-group">

      <label for="email">Email:</label>
    
  <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
 
   </div>

<div class="form-group">
 
     <label for="pss">Password:</label>
  
    <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
   
 </div>


    
  
  <div class="checkbox">
    
  <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    
<button type="submit" name=submit class="btn btn-primary">login</button>
 
 </form>
  </div>
            </div>
</div></div>
</div>


</body>
</html>


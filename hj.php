
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <a href='signin.php' style='color:white'>
           <span class='glyphicon glyphicon-off '>&ensp;
               </span>Logout</a></p>
                </div>
      </form>
            </div>
</div>
         
  </nav>
   <!-- list-->    
   <div class="container-fluid" >
    <div class="row" style="margin:0;">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="background-image:url(images1.jpg);">
      <h2> Tutorial </h2>
     <div class ="panel panel-primary">
         <div class="panel-heading">
             <h3 class="panel-title">HTML</h3>
         </div>
         <div class="panel-body">
             <select class="form-control" id="html" data-width="fit" > 
            <optgroup label="category"> 
             <option value="2">video</option>
                  <option value="3">e-book</option>
                  <option value="4">colleges-notes</option>
                  <option value="5">text</option>
             </optgroup>
            </select>   
         </div>
     </div>
      <div class ="panel panel-primary">
         <div class="panel-heading">
             <h3 class="panel-title">CSS</h3>
         </div>
         <div class="panel-body">
        <select class="form-control" id="css" data-width="fit" > 
             <optgroup label="category"> 
             <option value="2">video</option>
                  <option value="3">e-book</option>
                  <option value="4">colleges-notes</option>
                  <option value="5">text</option>
             </optgroup>
           </select>   
         </div>
       </div>
        <div class ="panel panel-primary">
         <div class="panel-heading">
         <h3 class="panel-title">JAVA</h3>
         </div>
         <div class="panel-body">
     <select class="form-control" id="javascript" data-width="fit" > 
         <optgroup label="category"> 
             <option value="2">video</option>
                  <option value="3">e-book</option>
                  <option value="4">colleges-notes</option>
                  <option value="5">text</option>
             </optgroup>
          </select>   
         </div>
             </div>
         <div class ="panel panel-primary">
         <div class="panel-heading">
             <h3 class="panel-title">php</h3>
         </div>
         <div class="panel-body">
              <select class="form-control" id="java" data-width="fit" > 
             <optgroup label="category"> 
             <option value="2">video</option>
                  <option value="3">e-book</option>
                  <option value="4">colleges-notes</option>
                  <option value="5">text</option>
             </optgroup>
            </select>   
         </div> 
         </div>
 
   
    </div>
        <div class="row" style="margin-left:10px;">
       <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12" style="background-color:blanchedalmond ;">
           <h5> Find our Tutorial's best links as rankings<span class="glyphicon glyphicon-hand-down"></span> </h5>
           <h1><u>Search Results in decreasing order of RATING </u> </h1> 

 			<div class="list-group" style="background-color:pink;">
    
         <a href="#" class="list-group" >
     
        	<?php
 
                $conn=mysqli_connect("localhost","root","","search");

    
  				$la=$_POST['lang'];
	
				$mod=$_POST["mode"];


//select $la db and $mod column and display the link with the order of $mod list in descending order
	
				$a="SELECT link FROM $la ORDER BY $mod";
		
			       $ins=mysqli_query($conn,$a);
		
			while($row = mysqli_fetch_assoc($ins))
{
		
				echo $row['link']."<br><br><br>";

	
					}    
		
		?>

           
 </a>  
             


 			
</div>


</body>

</html>


  </div>
  </div>
  </div>

  
    </body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","search");
$name=$_POST["name"];
$no=$_POST["mobile"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$ins="INSERT INTO `registration`(`name`, `no`, `email`, `password`) VALUES ('$name','$no','$email','$pass')";
$run=mysqli_query($conn,$ins);
header('Location:hh.php');
exit();
?>

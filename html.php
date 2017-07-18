<?php
$conn=mysqli_connect("localhost","root","","search");
$vdo;
$ebook=$_POST[];
$note=;
$text=;
$qu=mysqli_query($conn,"");

$qty= 0;
while ($num = mysql_fetch_assoc ($qu)) {
	$qty += $num['video'];
}
echo $qty;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
</head>
<body>
<h1>your results are:-</h1>
<p>
<ul>
	<li><a href="#" id='1'>link-1</a></li>
	<li><a href="#" id='2'>link-2</a></li>
	<li><a href="#" id='3'>link-3</a></li>
	<li><a href="#" id='4'>link-4</a></li>
	<li><a href="#" id='5'>link-5</a></li>
	<li><a href="#" id='6'>link-6</a></li>
	<li><a href="#" id='7'>link-7</a></li>
	<li><a href="#" id='8'>link-8</a></li>
	<li><a href="#" id='9'>link-9</a></li>
	<li><a href="#" id='10'>link10</a></li>
	<li><a href="#" id='11'>link-11</a></li>
	<li><a href="#" id='12'>link-12</a></li>
	<li><a href="#" id='13'>link-13</a></li>
	<li><a href="#" id='14'>link-14</a></li>
	<li><a href="#" id='15'>link-15</a></li>
	<li><a href="#" id='16'>link-16</a></li>
	<li><a href="#" id='17'>link-17</a></li>
	<li><a href="#" id='18'>link-18</a></li>
	<li><a href="#" id='19'>link-19</a></li>
	<li><a href="#" id='20'>link-20</a></li>
	

</ul>
</body>
</html>
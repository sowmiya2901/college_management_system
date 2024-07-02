<?php
$a=$_POST["name"];
$b=$_POST["age"];
$c=$_POST["dob"];
$d=$_POST["gender"];
$e=$_POST["email"];
$f=$_POST["park"];
$con=mysql_connect("localhost","root","");
mysql_select_db("park");
mysql_query("insret into ss(name,age,dob,gender,email,park) values('$a','$b','$c','$d','$e','$f')");
echo("YOUR APPLICATION SUBMITTED SUCCESSFULLY!");
include("admiossion.php");
mysql_close($con);
?>

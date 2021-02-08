<?php
	$user="root";
	$password='';
	$db="mflab";

	$conn=new mysqli('localhost',$user,$password,$db);
	if($conn->connect_error)
	{
		die("connection error:".$conn->connect_error);
	}
	echo("<h1>"."Connected"."</h1>"."<br>");
	//.....create table
	$table="CREATE TABLE home(
	   /*id INT(40) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	   name VARCHAR(40) NOT NULL,
	   sell VARCHAR(40) NOT NULL,
	   stock VARCHAR(40) NOT NULL*/
	   id INT(40) UNSIGNED PRIMARY KEY,
	   Postname VARCHAR(1000) NOT NULL,
	   paragraph VARCHAR(4294967295) NOT NULL,
       PostCreated TIMESTAMP

       )";


   if($conn->query($table)===TRUE){
   	echo("<h1>"."Connected"."</h1>"."<br>");
   }
   else{
   	echo "error find in".$conn->error;
   }

   $conn->close();








 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
	<?php
	$user="root";
	$pass='';
	$db="mflab";



	$conn=mysqli_connect('localhost',$user,$pass,$db);
	if(!$conn){
		echo "connection error".mysqli_connect_error()."<br>";
	}
	echo "connected";
	echo "<br>";


	$insdata="INSERT INTO {$_POST['PageSelect']}(id,Postname,paragraph)
	 VALUES('{$_POST['id']}','{$_POST['Postname']}','{$_POST['paragraph']}')";

	      if(mysqli_query($conn,$insdata)){
	      	echo "inserted";
	      }
	      else{
	      	echo "error inserting".mysqli_error($conn);
	      }


	      mysqli_close($conn);



  ?>
  <br><br>
  <a href="controlPanel.php">Dashboard</a>
</div>



</body>
</html>

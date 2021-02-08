<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	
	<?php 
		$user="root";
		$pass="";
		$db="mflab";

		$conn=mysqli_connect('localhost',$user,$pass,$db);

		if(!$conn){
			echo "connection error".mysqli_connect_error();
		}
		$update="UPDATE {$_POST['PageSelect']} SET Postname='{$_POST['Posttitle']}',paragraph='{$_POST['paragraph']}' where id='{$_POST['Postid']}' ";
		//$update="UPDATE content SET paragraph='{$_POST['paragraph']}' where id='{$_POST['Postid']}' ";

		if(mysqli_query($conn,$update)){
			echo "Update Successsful";
		}
		else{
			echo "try again!".mysqli_error($conn);
		}

		mysqli_close($conn);







	  ?>
</head>
<body>

</body>
</html>
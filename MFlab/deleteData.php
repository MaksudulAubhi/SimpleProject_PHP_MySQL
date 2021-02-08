<!DOCTYPE html>
<html>
<head>
	<title>DeletePost</title>
</head>
<body>
	<?php 
		$user="root";
		$pass="";
		$db="mflab";

		$conn=mysqli_connect('localhost',$user,$pass,$db);

		if(!$conn){
			echo "connection error".mysqli_connect_error();
		}
		$delete="DELETE FROM {$_POST['PageSelect']} WHERE id='{$_POST['Postid']}'";

		if(mysqli_query($conn,$delete)){
			echo "Deleted Successful";
		}
		else{
			echo "try again!".mysqli_error($conn);
		}
		mysqli_close($conn);






	 ?>

</body>
</html>
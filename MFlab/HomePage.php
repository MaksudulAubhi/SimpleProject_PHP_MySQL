<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		div{
			padding: 10px;
			background-color: green;
			color: white;	
			width: 80%;
			height: 350px;
			font-size: 1em;
		    font-family: Arial;
		    
		    border: 1px solid black;
		   

		}
	</style>
</head>
<body>
	
          

	
		<?php
			$user='root';
			$pass='';
			$db='mflab';

			$conn=mysqli_connect('localhost',$user,$pass,$db);

			$select="SELECT */*id,Postname, paragraph,PostCreated*/ FROM content limit 10";
			$result=mysqli_query($conn,$select);
			if (mysqli_num_rows($result)>1) {
			
				while ($row=mysqli_fetch_assoc($result)) {
					
				   	
					echo "<div>"."Post Number:- ".$row["id"].
					"<br>"."<b>"."Post Title:".$row["Postname"]."</b>"."<br>".$row["paragraph"]
			    	."<br>"."Post Created:- ".$row["PostCreated"]."<br>"."<br>"."<br>"."<br>"."<br>"."</div>";
					
				
			
             }
			}
			else{
				echo "0 results";
			}

			mysqli_close($conn);
		  ?>

		

	 

</body>
</html>
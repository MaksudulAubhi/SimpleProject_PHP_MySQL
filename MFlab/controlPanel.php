<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	
	<style type="text/css">
	    body{
	    	margin: 8px;
	    	padding: 10px;
	    	font-family: arial;
	    	height: 1000px;
	    }
		form{
			float: left;
			width: 70%;
			
		}
		.posttitle{
			border-radius: 10px;
			padding: 10px;
			border:1px solid black;

		}
		.postid{
			border-radius: 10px;
			padding: 10px;
			border:1px solid black;
		}
		form a{
			background-color: red;
			padding: 15px 50px;
			font-family: Arial;
			font-size: 1em;
			border-radius: 14px;
			border: none;
			color: white;
			text-decoration: none;


		}
		form a:hover{
			background-color: #001a66;
			color: white;
		}
		.submitBtn{
			background-color: #0099ff;
			padding: 15px 50px;
			font-family: Arial;
			font-size: 1em;
			border-radius: 14px;
			border: none;
			color: white;
			
		}

		input.submitBtn:hover{
			background-color:gray ;
			color: white;
		}
		.textarea{
		    padding-left: 10px;
			border-radius: 10px;
			border: 1px solid blue;

		}
		.UpdateData{
			background-color: ;
			border: 1px solid black;
			float: right;
			width: 25%;
			padding: 10px;
		}
		.select{
			border-radius: 10px;
			padding: 10px;
			border:1px solid black;
		}
		header{
			text-align: center;
			padding: 5px;
			border:1px solid black;

		}
	</style>
</head>
<body>



	<!--------------POST BOX----------------------->
	<header><h3>CONTROL PANEL(POST PAGE)</h3></header>
	<form action="dataUpload.php" method="post" title="Create Post">
	<h3>Select Page</h3>
    <select name="PageSelect" class="select">
    	<option value="content">MFBlog</option>
    	<option value="home">Home</option>
    	<option value="product">Product</option>
    	<option value="department">Department</option>
    	
    </select>
	<h3>Post Id:</h3>
	<input class="postid" type="text" name="id" value="only Integer "><br>
	<h3>Post Title:</h2>
	<input class="posttitle" type="text" name="Postname"><br><br>
	<textarea class="textarea" name="paragraph" rows="30" cols="100"></textarea><br>
	
	
	<input class="submitBtn" type="submit" value="Post Content"><br><br>
	
	<a href="mfHomepage.php">View Blog</a>
	<a href="EditPage.php">Edit & Delete</a>
</form>
  



    
<br>
    <div class="UpdateData" title="Post History">
    	<?php
			$user='root';
			$pass='';
			$db='mflab';

			$conn=mysqli_connect('localhost',$user,$pass,$db);

			$select="SELECT id,Postname, paragraph,PostCreated FROM content";
			$result=mysqli_query($conn,$select);
			if (mysqli_num_rows($result)>1) {
				
				while ($row=mysqli_fetch_assoc($result)) {
					echo " <b>"."Post Number:- ".$row["id"]."<br>"."Post Title:".$row["Postname"]."<br>".
					"Post Created:- ".$row["PostCreated"]."<br>"."<br>"."<br>";
					
					
				}

			}
			else{
				echo "0 results";
			}

			mysqli_close($conn);

	  ?>
    	
    </div>

    






</body>
</html>
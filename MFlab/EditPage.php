<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
	<style type="text/css">
		body{
	    	margin: 8px;
	    	padding: 2px;
	    	font-family: arial;
	    	height: 1000px;
	    }
		.updatebox{
			float:left ;
			padding: 10px;
			
			
		}
		.deletebox{
			float: right;
			
            width: 30%;
			
			text-align: center;
			padding: 10px;
		}
		.posttitle{
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
			background-color: #0099ff;
			border: 1px solid black;
			float: right;
			height: 100%;
			width: 30%;
			padding: 5px;
		}
		header{
			text-align: center;
			padding: 5px;
			border:1px solid black;

		}
		.select{
			border-radius: 10px;
			padding: 10px;
			border:1px solid black;
		}
	</style>
	
</head>
<body>
	<!--for Edit------------------------>
	<header><h3>CONTROL PANEL(Edit & Delete Page)</h3></header>
	<form action="updateData.php" method="post" title="Edit Post" class="updatebox">
	<h2>Edit Post:</h2>
	<h3>Select Page</h3>
	<select name="PageSelect" class="select">
    	<option value="content">MFBlog</option>
    	<option value="home">Home</option>
    	<option value="product">Product</option>
    	<option value="Department">Department</option>
    	
    </select>
	<h3>Post Id:</h3>
	<input class="posttitle" type="text" name="Postid" value="must be valid id"><br>
	<h3>Post Title:</h2>
	<input class="posttitle" type="text" name="Posttitle" value="Edit title"><br><br>
	<textarea class="textarea" name="paragraph" rows="25" cols="90"></textarea><br>
	
	
	<input class="submitBtn" type="submit" value="Update"><br><br>
	<a href="mfHomepage.php">View Blog</a>
	<a href="controlPanel.php">Post Page</a>
    </form>

<!--for Delete----------------------->
    
    <form action="deleteData.php" method="post" title="Delete Post" class="deletebox">
	<h2>Delete Post:</h2>
	<h3>Select Page</h3>
    <select name="PageSelect" class="select">
    	<option value="content">MFBlog</option>
    	<option value="home">Home</option>
    	<option value="product">Product</option>
    	<option value="Department">Department</option>
    	
    </select>

	<h3><br>Post Id:</h3>
	<input class="posttitle" type="text" name="Postid"><br><br>	
	<input class="submitBtn" type="submit" value="Delete"><br><br>
	<a href="mfHomepage.php">View Blog</a>
	<a href="controlPanel.php">Post Page</a>
    </form>

</body>
</html>
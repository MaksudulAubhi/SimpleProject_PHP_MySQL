<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<style type="text/css">
		.topColumn{
			padding: 20px;
			height: 200px;
			width: 70%;
			
		}
		



		



	</style>
	
</head>
<body>
	<div class="wrapper">
		    <header>
		    	<img class="logo" src="mf2.png" alt="mflab">
		    </header>

		<div class="menubar">
			<a href="mfHomepage.php"><i class="fa fa-home"></i> Home</a>
			<a href="mfBlog.php">MFBlog</a>
			<a href="Product.php">Product</a>
			<a class="active" href="department.php">Department</a>
			<div class="search-container">
				<form style="opacity: 0.9;" action="#search" method="post">
					<input class="search" type="text" name="searchbar" placeholder="Search..." size="30px" style="padding:8px;">
					<button type="submit" style="border: none; padding-top: 19px;padding-bottom: 19px;background-color: white;"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<a href="SignUp.php" style="float: right;"><i class="fa fa-sign-in"> </i> Sign in</a>
       </div>




       <!.....Homepage Code..>

       <div class="content">
        <br>
        <div class="topColumn">New Story</div><br>
        <div class="topColumn">New Story</div><br>
        <div class="topColumn">New Story</div><br>
</div>
























          <div>
			<footer>
				<div class="upperfooter">Follow us
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
				<hr>
				<div class="lowerfooter">
					<span><a href="mfHomepage.php"><b>MFLab</b></a></span>
					<a href="#Help">Help</a>
					<a href="#Privacy">Privacy</a>
					<a href="#Contact">Contact</a>
					<a href="#Report">Report</a>
					<a href="#About">About</a>
					<a href="#Product">Features</a>
					<a href="#idea"><b>IDEA</b></a>
                    <span style="float: right;background-color: black; color: white;">
					<?php
					date_default_timezone_set('Asia/Dhaka');
					echo "Bangladesh Time -".date('h:i:sa')."   ".date('d/m/y');
					  ?>
					</span>
				</div>
				
                   

			
			</footer>
		</div>

	</div>

</body>
</html>
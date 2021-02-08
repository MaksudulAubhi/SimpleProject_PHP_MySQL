<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<style type="text/css">
		.topColumn{
			background-color: white;
			color: black;
			padding: 20px;
			height: 200px;
			width: 75%;
			
			
			
		}
		.topColumn:hover{
			border-left: 2px solid black;
			border-right: 2px solid black;
		}
		
		.postsummary{
			float: right;
			width: 20%;
			background-color: white;
			
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
			<a class="active" href="mfBlog.php">MFBlog</a>
			<a href="Product.php">Product</a>
			<a href="department.php">Department</a>
			<div class="search-container">
				<form style="opacity: 0.9;" action="#search" method="post">
					<input class="search" type="text" name="searchbar" placeholder="Search..." size="30px" style="padding:8px;">
					<button type="submit" style="border: none; padding-top: 19px;padding-bottom: 19px;background-color: white;"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<a href="SignUp.php" style="float: right;"><i class="fa fa-sign-in"> </i> Sign in</a>
       </div>




       <!.....MFBLOG Code..>

       <br>
         <div class="postsummary">
            <div class="search-container" style="">
				<form style="" action="#search" method="post">
					<input class="search" type="text" name="blogsearch" placeholder="Search Post..." size="25px" 
					style="padding:8px;">
					<button type="submit" style="border: none; padding-top: 19px;padding-bottom: 19px;background-color: white;"><i class="fa fa-search"></i></button>
				</form>
			</div>
        	
        </div>
       <?php
			$user='root';
			$pass='';
			$db='mflab';

			$conn=mysqli_connect('localhost',$user,$pass,$db);

			$select="SELECT */*id,Postname, paragraph,PostCreated*/ FROM content limit 10";
			$result=mysqli_query($conn,$select);
			if (mysqli_num_rows($result)>0) {
			
				while ($row=mysqli_fetch_assoc($result)) {
					
				   	echo "<div class=topColumn>";
					echo//"Post Number:- ".$row["id"].
					"<br>"."<b>"."<h3>".$row["Postname"]."</h3>"."</b>"."<br>".$row["paragraph"]
			    	."<br>"."<br>"."<b>"."Post Created:- ".$row["PostCreated"]."</b>";
					echo "</div>";
				
			
             }
			}
			else{
				echo "0 results";
			}

			mysqli_close($conn);
		  ?>
























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
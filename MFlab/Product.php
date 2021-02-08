<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="body.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<style type="text/css">
		
		 .Product-con{
		 	height: 600px;
		 }
         .Product{
         	padding: 2px;
         	width: 17%;
         	height: 200px;
         	float: left;
         	text-align: center;

         }
        .Product:hover{
        	border-right: 2px solid black;
        	border-left: 2px solid black;
        	
               
        }
        .Product .feature{
        	text-decoration: none;
        	padding: 10px;
        	background-color: white;
        	opacity: 1;
        	border:1px solid black;
        	color:black;


        }
        .Product img{
        	padding: 12px;
        	height: 80px;
        	width: 160px;
        }
        .search-product{
        	text-align: center;
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
			<a class="active" href="Product.php">Product</a>
			<a href="department.php">Department</a>
			<div class="search-container">
				<form style="opacity: 0.9;" action="#search" method="post">
					<input class="search" type="text" name="searchbar" placeholder="Search..." size="30px" style="padding:8px;">
					<button type="submit" style="border: none; padding-top: 19px;padding-bottom: 19px;background-color: white;"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<a href="SignUp.php" style="float: right;"><i class="fa fa-sign-in"> </i> Sign in</a>
       </div>




       <!.....Product Code..>
           <div class="search-product">
				<form style="" action="#search" method="post">
					<input class="search" type="text" name="searchproduct" placeholder="Search Product..." size="70px" style="padding:8px;">
					<button type="submit" style="border: none; padding-top: 19px;padding-bottom: 19px;background-color: white;"><i class="fa fa-search"></i></button>
				</form>
			</div>


           <br>
           <div class="Product-con">
           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i  class="fa fa-download" style="font-size: 20px;padding: 8px;color: black; border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>

           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i class="fa fa-download" style="color:black;font-size: 20px;padding: 8px;border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>

           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i class="fa fa-download" style="color:black;font-size: 20px;padding: 8px;border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>

           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i class="fa fa-download" style="color:black;font-size: 20px;padding: 8px;border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>


           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i class="fa fa-download" style="color:black;font-size: 20px;padding: 8px;border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>


           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i class="fa fa-download" style="color:black;font-size: 20px;padding: 8px;border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>


           <div class="Product">
           	  <a href="mfbrowser.png" download>
				<img src="mfbrowser.png" alt="aa">
               <i class="fa fa-download" style="color:black;font-size: 20px;padding: 8px;border:1px solid black;"></i>
             </a>
           	  <a class="feature" href="#ProductFeature">Features <i class="fa fa-caret-down"></i></a>          	            	
           </div>

           
           
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
					<a href="#ProductFeature">Features</a>
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
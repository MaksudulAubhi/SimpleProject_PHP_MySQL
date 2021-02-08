 


 <?php

    
        $user='root';
		$pass='';
		$db='mflab';

		$conn=mysqli_connect('localhost',$user,$pass,$db);
		if (!$conn) {
			echo "connection error";
		}
        echo "connected";


        /* $sql="CREATE TABLE profile(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY kEY,
            name VARCHAR(100) NOT NULL,
            image longtext NOT NULL
             )";
        if (mysqli_query($conn,$sql)) {
        	echo "table created";
        }
        else{
        	echo "error".mysqli_error($conn);
        }
        */



         /*
 if(!empty($_FILES['uploaded_file']))
  {
    $path = "upload/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
    	
        	echo  "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    	}
      
     else{
        echo "There was an error uploading the file, please try again!";
    }
  
} 

*/



	$target_dir="upload/";
	$name=$_FILES["fileTo_Upload"]["name"];
	$target_file=$target_dir.basename($_FILES["fileTo_Upload"]["name"]);
	$uploadok=1;
	$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    ///image fake or real....................
    
	if(isset($_POST['submit'])){
		$cheak=getimagesize($_FILES["fileTo_Upload"]["tmp_name"]);
		if($cheak!==false){
			echo "file is an image"."<br>".$imagefiletype."<br>";
			$uploadok=1;
		}
		else{
		echo "file is not an image";
		$uploadok=0;
       }
	}

	////////////file exists..............////////////
    	
    if(file_exists($target_file)){
    	echo "Sorry file aleady exists";
    	$uploadok=0;
    }

    ///////////file size.................//////

    if($_FILES['fileTo_Upload']['size']>500000){
    	echo "sorry, Your file is to large";
    	$uploadok=0;
    }

    ////////////file limit..................///////////

    if($imagefiletype!="jpg" && $imagefiletype!="jpeg" && $imagefiletype!="png" && $imagefiletype!="gip"){
    	echo "Sorry, only jpg, jpeg,png,gip files are allowed.";
    	$uploadok=0;
    }

    //////////////cheak uploadok=0 || 1///////////////
     
   /*  if($uploadok==0){
     	echo "your file not uploaded";
     }
     else{
     	if (move_uploaded_file($_FILES["fileTo_Upload"]["tmp_name"],$target_file)) {
			echo "file successfully uploaded.".basename($_FILES["fileTo_Upload"]["name"]);     		
     	}
     	else{
     		echo "file not uploaded.";
     	}
     }
     */


     if($uploadok!=0){
     	$sql="INSERT INTO profile(name) values('".$name."')";
     	mysqli_query($conn,$sql);

     	move_uploaded_file($_FILES["fileTo_Upload"]["tmp_name"], $target_file);

     }

    

  
  
      $data="SELECT name FROM profile where id=6";
      $result=mysqli_query($conn,$data);
      $row=mysqli_fetch_array($result);
      $image_name=$row['name'];
    

      

      mysqli_close($conn);


    ?>
  <img height="50%" width="50%" src='<?php echo "upload/".$image_name;?>'>
  
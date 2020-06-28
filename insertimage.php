<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Insert | Image</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/img_425826.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	
	

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/business-2717063_1920.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="Post" enctype="multipart/form-data">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Insert New Image
					</span>

					<label for="CHOOSE IMAGE" class="sr-only">CHOOSE IMAGE</label>
					<button class="login100-form-btn">
                    <input type="file" id="CHOOSE IMAGE" class="form-control" accept="image/*
	                " required autofocus name="file" ></button>
<br><br>
					

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Insert
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="admin.php">
					<h3>		Back      </h3>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
<?php
		
if(isset($_POST["submit"])){
 
 $image = $_FILES['file']['name'];
 $image_type = $_FILES['file']['type'];
 $image_temp_loc = $_FILES['file']['tmp_name'];
 $image_size = $_FILES['file']['size'];
 $image_store= "uploadimg/".$image;
 
 

 
 
 move_uploaded_file($image_temp_loc,$image_store);
 
 

 $conn = mysqli_connect('localhost' , 'root' , '','hassaan');







//Insert to Mysqli Query
 $insert = "INSERT INTO images (image)
VALUES ('$image_store')";
 $result = mysqli_query($conn, $insert);


 
 
 //Result Message
 if($result){
?>
  <div class="alert alert-success">
    <strong>Image upload</strong> sucessfully.
  </div>
  
            
			<button type="button" class="btn btn-outline-info" >
			<a class="nav-link" href="admin.php">Ok</a></button>
         

<?php
 }
 else
 {
 ?>
 
 <div class="alert alert-danger">
    <strong>Image not upload</strong> try again.
  </div>
 
            
			<button type="button" class="btn btn-outline-info" >
			<a class="nav-link" href="upload image.php">Ok</a></button>
          
 
 
<?php

 }
 
 }
?>
	
	
	
	
	

</body>
</html>
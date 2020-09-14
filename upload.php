<?php

session_start();


if(!isset($_SESSION['loggedin'])){
	header('location:login.php');
	
}

if(isset($_POST['submit'])){
	
	include 'include/connect_database.php';
	
	$title = $_POST['title'];
	$content = $_POST['content'];
	$category = $_POST['category'];
	$date = date('F j, Y');
		echo "$title";
	
	$imageName = $_FILES["image"]["name"];
	$imageTemp = $_FILES["image"]["tmp_name"];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	
	if(!empty($title) && !empty($content) && !empty($category)){
		
				
		$insert = "INSERT INTO post(title,category,content,created,image) VALUES ('$title','$category','$content','$date','$imageName')";
		$run = mysqli_query($connect, $insert);
		
		if($run){
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			echo "SUCCESS";
			
		}else{
			
			echo "Failed";
			
		}
	
	
	}
	
}



?>

<!doctype html>
<html>
<head>
<title>

</title>

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width , initial-scale=1.0" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<header>	

<nav>

<div class="row clearfix">

<ul class="main-nav animated slideInDown" id="check-class">

<li><a href="view.php">SUBJECTS</a></li>

<li><a href="upload.php">UPLOAD NOTES</a></li>

<li><a href="mac2.php">VIEW NOTES</a></li>

<li><a href="#">ABOUT US</a></li>

<li><a href="logout.php">LOGOUT</a></li>

</ul>



<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a >

</div>

</nav>

<div class="wraper">

<?php
         echo date('F j, Y'); ?>
	<form method="post" action"upload.php" enctype="multipart/form-data">
		<select name="title">
		<option value="java">JAVA</option>
		<option value="cpp">CPP</option>
		<option value="dbms">DBMS</option>
		<option value="dsa">DSA</option>
		<option value="mep">MEP</option>
		<option value="python">PYTHON</option>
		
		</select> <br><br>
		<input type="category" name="category" placeholder="title" required>	<br><br>
		<textarea name="content" rows="10" cols="40"> </textarea><br><br> 
		<input type="file" name="image"  required><br><br>
		<input type="submit" name="submit"  value="submit"  required><br><br>
	</form>
	
</div>

</header>
</body>
</html>
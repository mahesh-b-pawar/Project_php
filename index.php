<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>

<html>

<head>

<title>notes</title> 

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

<script type="text/javascript">

	function slideshow(){
		var x = document.getElementById('check-class');
		if(x.style.display === "none"){
		   x.style.display="block";
		}else{
			x.style.display="none";	
}
}
</script>


</nav>

</header>

<?php echo htmlspecialchars($_SESSION["username"]); ?>
</body>

</html>


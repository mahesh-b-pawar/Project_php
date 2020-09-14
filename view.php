<!DOCTYPE html>

<html>

<head>

<title>upload</title> 

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

<div>					
		<h2 style="color:white;">NOTES</h2>
			
					<ul>
						<li>
						<div class="container1">
							<a href="mac.php"><img src="images/java.jpeg" alt="Notebook" style="width:100%;" ></a>
							<div class="content1">	
							<h1>JAVA</h1>
  						</div>
						</li>
						<li>
							<div class="container2">
							<a href="mac.php"><img src="images/data.jpeg" alt="Notebook" style="width:100%;" ></a>
							<div class="content2">	
							<h1>DBMS</h1>
  							</div>							
						</li>
						<li>
							<div class="container3">
							<a href="mac.php"><img src="images/dsaimg.jpeg" alt="Notebook" style="width:100%;" ></a>
							<div class="content3">
							<h1>DSA</h1>
  							</div>
						</li>
						<li>
							<div class="container4">
							<a href="mac.php"><img src="images/mepimg.jpeg" alt="Notebook" style="width:100%;" ></a>
							<div class="content4">	
							<h1>MEP</h1>
  							</div>
						</li>
						<li>
							<div class="container5">
							<a href="mac.php"><img src="images/python.jpeg" alt="Notebook" style="width:100%;" ></a>
							<div class="content5">	
							<h1>PYTHON</h1>
  							</div>
						</li>
						<li>
							<div class="container6">
							<a href="mac1.php"><img src="images/cpp.jpeg" alt="Notebook" style="width:100%;" ></a>
							<div class="content6">	
							<h1>C++</h1>
  							</div>
						</li>
					</ul>
</div>

</header>



</body>

</html>

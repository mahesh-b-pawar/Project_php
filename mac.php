<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

<li><a href="mac.php">VIEW NOTES</a></li>

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



<div class="row">


<?php
			include 'include/connect_database.php';
			$s="java";
			$sql =" SELECT * FROM post where title='".$s."' ";
			$run=mysqli_query($connect,$sql);
			
			
			
			while($query=mysqli_fetch_array($run)){
				$id=$query['id'];
				$image=$query['image'];
				$title=$query['title'];
				$content=$query['content'];
				$category=$query['category'];
				$date=$query['created'];
				
			
		  
		  
		  ?>
		   
	



    <div class="col">
      <div class="col-md-6">
				 <div class="card" id="card_main" style="width: 18rem;">
			  <img src="uploads/<?php echo $image?>">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $title?></h5>
				<p class="card-text"><?php echo substr($content, 0,15);?></p>
				<div class="btn-group" role="group" aria-label="Basic example" style="width:100%;">
				<a href="details.php?id=<?php echo $id?>" class="btn btn-primary">read more</a>
				</div>
			  </div>
			</div>
			 
    </div>

   
	 </div>
	
			<?php } ?>
	
 </div>
   
 
    
</header>
</body>
<html> 
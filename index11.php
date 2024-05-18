<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Food</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style11.css">
	<style>
	body {
         background-color: rgb(240,240,240);
        }
</style>
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="images/photo.jpeg" alt="">
      <div class="container">

        <br>
        <h1 style="color:white"> Welcome <?php echo  $_SESSION['username'];   ?></h1>
		
    </div>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>


    <nav class="navbar">
        <ul>
            <li><a href="index11.php">DONATE</a></li>
            <li><a href="view2.php">FOOD REQUEST</a></li>
			<li><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>

</header>

<!-- header section ends -->
<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class= "home" id="home">

    <div class= "container">
        <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label"><h3 style="color:black"">Name of dish</label>
                <input type="text" class="form-control" id="name" name="name" style="height:20px" placeholder="Enter name of dish">
            </div><br><br>
            <div class="mb-3">
                <label for="servings" class="form-label"><h3 style="color:black" >How Many Servings</label>
                <input type="text" class="form-control" id="servings" name="servings" style="height:20px" placeholder="serves for">
            </div><br><br>
            <div class="mb-3">
                <label for="address" class="form-label"><h3 style="color:black">Pick Up Address</label>
                <input type="text" class="form-control" id="address" name="address" style="height:20px" placeholder="address">
            </div><br><br>
            <div class="mb-3">
                <label for="contact" class="form-label"><h3 style="color:black" >Contact number</label>
                <input type="contact" class="form-control" id="contact" name="contact" style="height:20px" placeholder="Enter your contact">
		
            </div><br><br>
			 </div><br>
			<div class="mb-3">
                <label for="date" class="form-label"><h3 style="color:black" >Date & Time</label>
                <input type="datetime-local" class="form-control" id="date" name="date" placeholder="Enter your contact">
		
            </div><br>
	 
			
	 
    

            <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Submit">
				  
				  </form>
				  </div>

 </section>










<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script11.js"></script>


</body>
</html>
<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login1.php');
}


?>

<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>

<title>Request</title>
	
<html lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style111.css">
	<style>
	body {
         background-color: rgb(240,240,240);
        }
		
		table{
	border-collapse: collapse;
	width: 105%;
	color: #1E0E0C;
	font-family: monospace;
	font-size: 20px;
	text-align: left;
}
th{
	background-color: #59ced9;
	color: white;
}
tr:nth-child(even) {background-color: #d9a459}

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
            <li><a href="view1.php">Request Food</a></li>
            <li><a href="code2.php">Your Requested Food</a></li>
			<li><a href="logout1.php">Logout</a></li>
            

        </ul>
		
	
    </nav>

</header>

    
   <main style="margin-top: 20px;">
    <div class="container pt-4">
       
		<table class="table table-sm table-dark">
            <thead>
                <tr> <td> 
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Serving For  </th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
					<th scope="col">Date and Time</th>
                    <th scope="col">Image</th>
                    </td>
                </tr>
            </thead>
            <tbody>
			
   <form action="code.php" method="POST">
    <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if ($res) {
          	while ($row = mysqli_fetch_array($res)) {  ?>
             <tr>
			 <td>
				 <input type ="checkbox" name=" techno[]" value="<?php echo"name= "  .$row['name']; ?> and <?php echo"id= " .$row['id']; ?>  " />
				 </td>
			    <td>
				    <p><?php echo" " .$row['id']; ?></p>
                 </td>   
				 <td>
				    <p><?php echo" "  .$row['name']; ?></p>
                 </td>  
				 <td>
				    <p><?php echo" "  .$row['servings']; ?></p>
                 </td>  
				 <td>
				    <p><?php echo" "  .$row['address']; ?></p>
                 </td>  
				 <td>
				    <p><?php echo" "  .$row['contact']; ?></p>
                 </td>  
				 <td>
				    <p><?php echo" "  .$row['date']; ?></p>
                 </td>  
				 <td>
				    <img src= "uploads/<?php echo $row['image_url']?>" width="210" height="200"/>
                 </td>            
				 
			 
		</tr>
		
    <?php } }?>
	       
            </tbody>
        </table>
       <br> 
  <div class="mb-3">
  
                <label for="email" class="form-label"><h1>Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
		
            </div>
			  </br>
			  <br>
  <div class="mb-3">
                <label for="contact" class="form-label"><h1>Contact number</label>
                <input type="contact" class="form-control" id="contact" name="contact" placeholder="Enter your contact">
		
            </div>
			</br>
   <div class="form-group mt-3">
                                <button name="save_multicheckbox" class="btn btn-primary">Request</button>
                            </div>
  </div>
</main>

    
	</form>
	
	<!-- scroll top button  -->


	
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script11.js"></script>
</body>
</html>
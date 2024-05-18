<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index11.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM `images` ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if ($res) {
          	while ($row = mysqli_fetch_array($res)) { ?>
			     
				   
         
             <div class="alb">
             	 <img src= "uploads/<?php echo $row['image_url']?>" width="210" height="200"/>
				
			<p><?php echo" "  .$row['name']; ?></p>
				
				
             </div>
			 
          		
    <?php } }?>
               
           
	
</body>
</html>
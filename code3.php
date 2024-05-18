<!DOCTYPE html>
<html>
<head>

<title>Selected Food</title>
<html lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">


table{
	border-collapse: collapse;
	width: 80%;
	color: #d96459;
	font-family: monospace;
	font-size: 20px;
	text-align: left;
}
th{
	background-color: #d96459;
	color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}


</style>	 

<style>
body {
         background-color:#231F20;
        }
 main {
                padding-left: 240px;
                padding-top:100px;
            }
</style>
</head>
<body>
<a href="view1.php">&#8592;</a>
   <main style="margin-top: 50px;">



/*<table border="1">
       <tr>
	         
			 <th>Contact</th>
			 <th>Food</th>
		</tr>	*/
<?php
$connect=mysqli_connect("localhost", "root", "", "she") or die("Connection Failed");
$query=<<<QUERY
     Delete id From images INNER JOIN food ON images.id=consumer.id;
QUERY;
$result= mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result))
{
   ?>
   
       <tr>
	        
			<td><?php echo"".$row['contact'];?></td>
			<td><?php echo"" .$row['name'];?></td>
		</tr>
	<?php
}  
?>
</table>
</main>
</body>
</html>
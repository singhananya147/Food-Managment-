

<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>View</title>
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
         background-color: rgb(240,240,240);
        }
 main {
                padding-left: 240px;
                padding-top:15px;
            }
</style>

 
</head>

   <body>
     <a href="index11.php">&#8592;</a>
   <main style="margin-top: 20px;">
    <div class="container pt-4">
       
		
		
		<table class="table table-sm table-dark">
            <thead>
               <tr>
                    <th scope="col">Name and Id</th>
                 <th scope="col">email</th>
                    <th scope="col">Contact</th>
					
                   
                </tr>
            </thead>
            <tbody>
  
     <?php 
          $sql = "SELECT * FROM food ";
          $res = mysqli_query($conn,  $sql);

          if ($res) {
          	while ($row = mysqli_fetch_array($res)) {  ?>
             <tr>
			 
			     
				 <td>
				    <p><?php echo" "  .$row['name']; ?></p>
                 </td>  
				  
				 <td>
				    <p><?php echo" "  .$row['email']; ?></p>
                 </td>  
				 <td>
				    <p><?php echo" "  .$row['contact']; ?></p>
                 </td>  
				    <td>
				 <input type= "submit"  value= "Approve" >
		
		         </td>     
				 
			 
		</tr>
		 
    <?php } }?>
	      
            </tbody>
        </table>
        
  </div>
</main>
    
	
</body>
</html>
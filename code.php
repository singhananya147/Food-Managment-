<?php
session_start();
$con = mysqli_connect("localhost","root","","she");
$email = $_POST['email'];
$contact  = $_POST['contact'];

if(isset($_POST['save_multicheckbox']))
{
    $techno = $_POST['techno'];
    foreach($techno as $name)
    {
        // echo $branditems."<br>";
        $query = "INSERT INTO food (name, email, contact) VALUES ('$name', '$email', '$contact' )";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {    
        $_SESSION['status'] = "Inserted Successfully";
		
		
        header("Location: view1.php");
	
	$alert = "<script>alert('Your request is sent to provider');</script>";
	echo $alert;
	
			  
			      }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        //header("Location: view1.php");
  /*$alert = "<script>alert('error occured');</script>";
	echo $alert;*/
    }
	
	
	
}

?>

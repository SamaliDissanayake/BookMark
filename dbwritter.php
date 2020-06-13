
 <?php
 /*
	include_once './DbConnect.php';
	
	//create a new dbconnection object
	$db = new DbConnect();
	
	//connect to the DB
	$conn = $db->getConnection();
	
	if($conn){
		echo "DB Connected!<br>";
		
		//Insert sumbitted data into the db tables
    
		$user = $_POST['username'];
		$password = $_POST['pass'];
		$email = $_POST['email'];
		
		$sqlQuery = "INSERT INTO user
        (username,password,email) VALUES 
		('$user','$password','$email')";
        
				
		//execute Query
		$respond = mysqli_query($conn,$sqlQuery);
		
		if($respond)
			echo "Record Inserted!";
		else
			echo "Record is not inserted!";
		
	}else{
		echo "DB is Not Connected!";
		die('Could not connect: ' . mysql_error()); 
	}

?>
 <?php
//DB-login
include "conn.php";
		$first_name = $_REQUEST['first_name'];
		$sql ="INSERT INTO welcome_names (first_name) 
		VALUES ('$first_name')";			
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
  header('Location: '."../list.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

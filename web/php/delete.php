<?php
//DB-login
include "conn.php";
		$sql ="TRUNCATE TABLE welcome_names;";			
if ($conn->query($sql) === TRUE) {
  echo "Succesfully deleted";
  
  header('Location: '."../list.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

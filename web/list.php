<?php 
include "php/conn.php";
$sql = "SELECT * FROM welcome_names";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CareerSinage/general/css/style.css">
</head>
<body>
<form action="php/insert.php" method="post"class='form'>
<p class='field required'>
        <label class='label' for='first_name'>First name</label>
        <input class='text-input' id='first_name' name='first_name' required type='text'>
    </p>
    <p class='field'>
        <input class='button' type='submit' value='Upload'>
    </p>
    

    <table class="table">
    <thead class="noHover">
        <tr>
        <th>ID</th>
        <th>First Name</th>
       
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td>
                    
                </td>
                    
                    </td> 
                    </tr>                       
        <?php       }
            }
        ?>                
    </tbody>
</table>
    </div> 

</form>

<form action="php/delete.php" method="post"class='form'>
    <p class='field'>
        <input class='button' type='submit' value='Delete'>
    </p>
    </form>
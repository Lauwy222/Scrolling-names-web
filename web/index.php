
<?php 
include "php/conn.php";
//Select names
$sql = "SELECT * FROM welcome_names";
$result = $conn->query($sql);
//Select latest ID
$sqlcss = "SELECT * FROM welcome_names ORDER BY id DESC LIMIT 1";
$resultcss = $conn->query($sqlcss);
//Creates and calculates the var $css for the css keyframing
while($row = $resultcss->fetch_assoc()) { ?>
         <?php $css = $row['id']*-100-100?>
            <?php } 
            ?>
<?php
header("Content-type: text/html; charset: UTF-8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carrière Welcome</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!--Stylesheet-->  
    <link rel='stylesheet' type='text/css' href='css/style.php' />
</head>
<body>
   <div class="wrapper">
       <p>Welcome</p>
   

       <div class="words">
       <a href="list.php" target="_blank"><span>CLICK ME</span></a>
       <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {?>
           <span><?php echo $row['first_name']; ?></span>
           <?php       }
            }
        ?>  
        <span>at Carrière!</span>
       </div>

   </div>
</body>
<style>
    @keyframes spin_words{
    0%{
        transform: translateY(-112%);
    }
    100%{
        transform: translateY(<?php echo $css;?>%);
    }
}</style>
</html>



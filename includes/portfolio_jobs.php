<?php 
// Include the database configuration file  
require_once('config.php'); 
 
// Get image data from database 

$sql = "SELECT * from tb_posts ";
$result = mysqli_query($conn,$sql);


// while ($rows = mysqli_fetch_row($result)) {
//         var_dump($rows[1]);
//     }
// ?>

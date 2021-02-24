<?php
$servername='localhost';
$username='zalsamac';
$password='h3addQ[;1A38JC';
$dbname = "zalsamac_grc";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn)
    {
        die('Could not Connect MySql Server:' .mysql_error());
    }
?>


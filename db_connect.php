<?php 

$servername="localhost";
$username="root";
$password="";
$dbase="tms_db";


$conn= new mysqli($servername,$username,$password,$dbase)or die("Could not connect to mysql".mysqli_error($con));

/*date_default_timezone_set('Asia/Manila'); */

?>
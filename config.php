
<!-- $currency = 'inr ';
$db_username = 'root';
$db_password = '';
$db_name = 'bolt';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name); -->


<?php
$currency = 'INR ';
$host='localhost';
$username='root';
$password='';
$database='new_gavin';

$conn = mysqli_connect("$host","$username","$password","$database");
// echo "shivam";die();
if (!$conn) {
	header("Location:/errors/dberror.php");
	die();
}


?>
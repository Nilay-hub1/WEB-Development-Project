<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "applicationgtu";

$conn = new mysqli($server,$username,$password,$dbname) or die("Unable to Connectt");
$id=$_REQUEST['id'];
$sql = "DELETE FROM application123 WHERE id='$id'";

mysqli_query($conn, $sql);

    header("Location: retrive.php");


?>
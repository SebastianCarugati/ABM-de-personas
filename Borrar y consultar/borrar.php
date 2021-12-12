<?php
include './db.php';

$con = mysqli_connect($url,$usuario,$pass,$db) or die ("problemas en la conexión");
$sql="DELETE FROM users WHERE dni = '$_REQUEST[dni]'";
mysqli_query($con, $sql);
mysqli_close($con);
echo "Usuario borrado con exito"
?>
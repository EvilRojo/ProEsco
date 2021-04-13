<?php 
	$id=$_GET['id'];
	$con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");
	mysqli_query($con,"delete from usuario where Id_Usu='$id'")or die("problemas en el query".mysqli_error($con));
	mysqli_close($con);
	header('Location: phpCataM.php');
?>
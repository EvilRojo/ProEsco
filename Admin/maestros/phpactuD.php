<?php
$nom=$_POST['nombre'];
$apa=$_POST['apa'];
$ama=$_POST['ama'];
$id=$_POST['id'];
$cor=$_POST['email'];
$cont=$_POST['contra'];
$con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");
mysqli_query($con,"UPDATE usuario SET Nom_Usu='$nom',Ape_pat='$apa',Ape_Mat='$ama',Correo_Usu='$cor',Contra_Usu='$cont' where Id_Usu='$id'")
    or die("error en actualizar ".mysqli_error($con));
mysqli_close($con);
header('Location: phpCataM.php');
?>

<?php
$id=$_POST['id'];
$nom=$_POST['nombre'];
$apa=$_POST['ap_pat'];
$ama=$_POST['ap_mat'];

$cor=$_POST['correo'];
$cla=$_POST['contra'];
$rol=$_POST['rol'];

$con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");


mysqli_query($con,"insert into usuario(Id_Usu,Nom_Usu,Ape_pat,Ape_Mat,Correo_Usu,Contra_Usu,Rol_Id)values('$id','$nom','$apa','$ama','$cor','$cla','$rol')")or die(header('Location: mensaje3.html'));

mysqli_close($con);


header('Location: mensaje.html');
?>
<?php
$id=$_POST['id'];
$idr=3;
$idu=$_POST['idu'];
$fec=$_POST['fec'];
$nom=$_POST['nom'];
$pro=$_POST['pro'];
$sol=$_POST['sol'];

$con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");
mysqli_query($con,"insert into Reporte(Id_Repor,Desc_Repor,Alternativa_Soluc,Fecha_Repor,Id_Alumno,Id_Usuario)values('$idr','$pro','$sol','$fec','$id','$idu')")or die(header('Location: mensaje3.html'));
mysqli_close($con);
header('Location: mensaje.html');

?>
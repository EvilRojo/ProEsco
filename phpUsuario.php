<?php
$nom=$_POST['nombre'];
$apa=$_POST['ap_pat'];
$ama=$_POST['ap_mat'];
$id=$_POST['id'];
$cor=$_POST['correo'];
$cla=$_POST['contra'];

$con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");


mysqli_query($con,"insert into tutor(Id_Tutor,Nom_tutor,Ap_pat_tutor,Ap_mat_tutor,Correo_Tutor,Contra_Tutor)values('$id','$nom','$apa','$ama','$cor','$cla')")or die(header('Location: mensaje2.html'));

mysqli_close($con);


header('Location: mensaje.html');
?>
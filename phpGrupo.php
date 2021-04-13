<?php
$nom=$_POST['nombre'];

$id=$_POST['id'];


$con=mysqli_connect("localhost","id5798215_rojo","12523916","id5798215_proesco") or die("error de conexion");


mysqli_query($con,"insert into grupos(Id_Grupo,Nom_Grupo)values('$id','$nom')")or die(header('Location: mensaje2.html'));

mysqli_close($con);


header('Location: mensaje.html');
?>
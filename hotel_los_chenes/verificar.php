<?php
session_start();
require_once 'mysqlConexion.php';



$_SESSION['USER']=$_POST["username"];
$claveLogin= $_POST["clave"];
//$claveCifrada= md5($claveLogin);
//echo $claveCifrada;
//echo $claveCifrada;
$queryUsuario= "SELECT * FROM usuarios where correo='".$_SESSION['USER']."' AND clave='$claveLogin'";

$result= $conexion->query($queryUsuario);


//echo $queryUsuario;


while ($row=mysqli_fetch_array($result)) {
	$username=$row["correo"];
	$clavebd=$row["clave"];
	
}

if ($clavebd!=null) {
	print("<script> 
		window.location='principal.php';</script>");
}else{

	print("<script> 
		alert(\"Administrador no encontrado, intente de nuevo.\");
	window.location='inicioSesion.php';</script>");
	
}









?>
<?php
/*// especificar los valores de acceso a MYSQL
$host="localhost";
$puerto="3306";
$usuario="root";
$clave="";
$baseDeDatos="restaurant";


function Conectarse()
{
	global $host, $puerto, $usuario, $clave, $baseDeDatos;
	if (!($link=mysqli_connect($host.":".$puerto, $usuario))) {
		echo "No hay acceso al servidor MySQL";
		exit();
	} else{
		echo "Listo, estamos conectados a MySQL";
	}

	if (!mysqli_select_db($link, $baseDeDatos)) {
		echo "Error seleccionando BD";
		exit();
	} else
	{
		echo "Nos conectamos a la BD $baseDeDatos sin problemas";
	}

	return $link;
}
*/

$conexion = new mysqli("localhost", "root", "", "hotel");

    if($conexion->connect_errno){
        echo "Fallo al conectar la base de datos";
    }else{
       // echo "Conexion exitosa";
    }
?>

<?php

	include ("conexion.php");

	$query = "SELECT * FROM t_persona";
	$resultado = mysqli_query($conexion, $query);


	if(! $resultado){
		die("Error, no hay datos");
	}else{
		while ($datos = mysqli_fetch_assoc($resultado)) {
			 $arr["data"][] = $datos;
		}

		echo json_encode($arr);

	}


	

	
<?php
	include('Validarusuario.php');

	$validar = new Validarusuario;

	$nombre=$_POST['nombre'];
	$password=$_POST['pass'];

	$resultado=$validar->Validarusuario($nombre, $password);

	var_dump($resultado);

	if($resultado->num_rows == 1)
	{
		header("location:ventas.php");
	}
	else
	{
		header("location:index.html");
	}
?>
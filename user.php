<?php
	include ('Conexion.php');

	$con=new Conexion();

	$user=$_POST['nombre'];
	$password=$_POST['password'];

	$query="SELECT * FROM `user` WHERE user='$user' AND password='$password'";
	$usuario=$con->query($query);
	$con->close();
	

	if($usuario->num_rows==1)
	{
		header("location:ventas.php");
	}
	else 
	{
		header("location:index.html");
    }
?>
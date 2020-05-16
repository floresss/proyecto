<?php
	include ('Conexion.php');

	class ValidarUsuario
	{
		public function ValidarUsuario($user, $pass)
		{
			$us= new Conexion();
			$q="SELECT * FROM `usuarios` WHERE `user`='$user' AND `password`='$pass';";
			$usuario=$us->query($q);
			$us->close();
			return $usuario;
		}
	}
?>
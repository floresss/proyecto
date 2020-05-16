<?php
	include ('Conexion.php');

	class ValidarUsuario
	{
		public function Validarusuario($usuario, $pass)
		{
			$us= new Conexion();
			$q="SELECT * FROM `usuarios` WHERE `user`='$usuario' AND `password`='$pass';";
			$usuario=$us->query($q);
			$us->close();
			return $usuario;
		}
	}
?>
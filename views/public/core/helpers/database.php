<?php
	class Conexion
	{
		public function connec(){
			$servername = "127.0.0.1";
			$database = "alpha_vino";
			$username = "root";
			$password = "";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $database);
			mysqli_query($conn,"SET NAMES 'UTF8'");
			// Check connection
			if (!$conn) {
				echo("Error: aqui" . mysqli_connect_error());
			}
			return $conn;
		}
	}
?>

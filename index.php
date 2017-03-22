<html>
<head>
<title> PHM </title>
</head>
<body>
	<?php
		//Alejandro Daniel Morales Alcázar
		//Usando variables en PHP
			echo "<h1>Variables</h1>";
			$nombre="Alejandro ";	//Tipo cadena
			$nombre2="Daniel ";
			$apellido="Morales ";
			$apellido2="Alcázar ";
			$edad=20;
			$salario=12345.60;
			$fechaNacimiento="23/08/96";
			$estatus=true;
				echo	$nombre."<br/>";
				echo	$apellido."<br/>";
				echo 	"Nombre Completo: " .$nombre.$nombre2.$apellido.$apellido2."<br/>";
				echo	"Nació el : " . $fechaNacimiento."<br/>";
				echo 	"Con el salario: " .$salario."<br/>";
				echo	"Estatus: "	.$estatus;
				echo	"Edad: " .$edad;
		
?>
	<h1> Operadores Aritméticos </h1>
	<?php
		$a=5;
		$b=3;
		$suma=$a+$b;
		$resta=$a-$b;
		$multiplica=$a*$b;
		$divide=$a/$b;
		echo $suma;
		echo	"La suma de " .$a. "+" .$b. "Es: " .$suma."<br/>";
		echo	"La resta de " .$a. "-" .$b. "Es: " .$resta."<br/>";
		echo	"La división de " .$a. "/" .$b. "Es: " .$divide."<br/>";
		echo	"La multiplicación de " .$a. "*" .$b. "Es: " .$multiplica."<br/>";
		
	?>
</body>
</html>

<?php 	
include('admin/core/utils.php');
	$xc=conectar();

	$nombre=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['email'];
	$numero=$_POST['numero'];
	$edad=$_POST['edad'];

	$cliente = "INSERT INTO clientes (nombres,apellidos,email,edad,numero,visitado) VALUES  ('$nombre','$apellidos','$correo',$edad,'$numero','1')";
	echo $cliente;
	$res=mysqli_query($xc,$cliente);
	if($res){
		echo "almacenado";
	}
	else{
		echo "no se almaceno";
	}

	echo $res;
 ?>

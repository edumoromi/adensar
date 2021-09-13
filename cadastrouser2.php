<?php
require('configDB.php');


		$logado = $_SESSION['login'];


$usuario = $_POST['login'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$procurar = "SELECT * FROM `usuario` WHERE login = '".$usuario ."'";
$verificar = mysqli_query($link, $procurar);

$sql =  "
INSERT INTO usuario (login,senha,nivel)
VALUES(
'".$usuario ."',
'".$senha ."',
'".$nivel ."')";

 if(mysqli_num_rows($verificar) > 0){
	 
	 $error = "Usuario Existente";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	echo "<script type='text/javascript'>document.location.href='cadastrouser.html'</script>";

	 } else {
	mysqli_query($link,$sql);
	$error = "Registrado com sucesso";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	echo "<script type='text/javascript'>document.location.href='adensaradm.html'</script>";
	mysqli_close($link); 
	
	 }
  ?>
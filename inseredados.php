<?php
require('configDB.php');
include('adensar2.php');

$placa = $_POST['placa'];
$especie = $_POST['especie'];
$altura = $_POST['altura'];
$diametro = $_POST['diametro'];
$tipofolha = $_POST['tipofolha'];
$margefolha = $_POST['margefolha'];
$filotaxia = $_POST['filotaxia'];
$espinho = $_POST['espinho'];
$alturaespinho = $_POST['alturaespinho'];
$diametroespinho = $_POST['diametroespinho'];
$foto = $_POST['foto'];
$lat = $_POST['gpslat'];
$longi = $_POST['gpslong'];

$procurar = "SELECT * FROM `placa` WHERE ID_placa = '".$placa ."'";
$verificar = mysqli_query($link, $procurar);

$sql =  "
INSERT INTO placa
VALUES (
'".$placa ."',
'".$especie ."',
".$altura .",
".$diametro .",
'".$tipofolha ."',
'".$margefolha ."',
'".$filotaxia ."',
'".$espinho ."',
".$alturaespinho .",
".$diametroespinho .",
'".$lat ."',
'".$longi ."')";

$sql2 =  "
INSERT INTO markers(name,type,lat,lng)
VALUES (
'".$placa ."',
'".$especie ."',
'".$lat ."',
'".$longi ."')";
 if(mysqli_num_rows($verificar) > 0){
	 
	 $error = "Placa Existente";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	echo "<script type='text/javascript'>document.location.href='adensar2.php'</script>";

	 } else {
	mysqli_query($link,$sql2);
	mysqli_query($link,$sql);
	$error = "Registrado com sucesso";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	mysqli_close($link); 
	echo "<script type='text/javascript'>document.location.href='adensar.html'</script>";
	 }
  ?>
<?php
require('configDB.php');

$placa = $_POST['placa'];
$procurar = "SELECT * FROM `placa` WHERE ID_placa = '".$placa ."'";
$result = mysqli_query( $link,$procurar );
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$error = "Resultado encontrado";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
       
    $row = mysqli_fetch_assoc($result);
		
		
} else {
	 $error = "Nenhum resultado encontrado";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	echo "<script type='text/javascript'>document.location.href='adensar1.php'</script>";
}

?>

<html> <head> 
 <link href="bootstrap.min.css" rel="stylesheet"></head><body>
<form>
  ID_Placa:<br>
  <input class="form-control" type="text"  readonly name="id_placa" value="<?php echo $row["ID_placa"]; ?>"><br>
  Especie:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["especie"]; ?>"><br>
  Altura:<br>
  <input class="form-control" type="text" name="id_placa" readonly=“true” value="<?php echo $row["altura"]; ?>"><br>
  Diametro:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["diametro"]; ?>"><br>
  Tipo de Folha:<br>
  <input class="form-control" type="text" name="id_placa" readonly=“true” value="<?php echo $row["tipo_de_folha"]; ?>"><br>
  Marge de Folha:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["marge_de_folha"]; ?>"><br>
  Filotaxia:<br>
  <input class="form-control" type="text" name="id_placa" readonly=“true” value="<?php echo $row["filotaxia"]; ?>"><br>
  Espinhos:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["espinhos"]; ?>"><br>
  Altura dos espinho:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["altura_espinho"]; ?>"><br>
  Diametro do espinhos:<br>
  <input class="form-control" type="text" name="id_placa" readonly=“true” value="<?php echo $row["diametro_espinho"]; ?>"><br>
  Latitude:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["lat"]; ?>"><br>
  Longitude:<br>
  <input class="form-control" type="text" name="especie" readonly=“true” value="<?php echo $row["longi"]; ?>"><br>
</form></head></html>
		
		
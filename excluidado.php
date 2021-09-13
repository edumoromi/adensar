<?php
		
		
require('configDB.php');
$placa = $_POST['placa'];
$procurar = "SELECT * FROM `placa` WHERE ID_placa = '".$placa ."'";
$deletar = "DELETE FROM `placa` WHERE ID_placa = '".$placa ."'";
$deletar2 = "DELETE FROM `markers` WHERE name = '".$placa ."'";
$result = mysqli_query( $link,$procurar );
if (mysqli_num_rows($result) > 0) {
    $resulto = mysqli_query( $link,$deletar );
	$resulto2 = mysqli_query( $link,$deletar2 );
	$error = "Deletado com Sucesso";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
       
	 echo "<script type='text/javascript'>document.location.href='adensarexclui.php'</script>";
		
		
} else {
	 $error = "Nenhum resultado encontrado";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	echo "<script type='text/javascript'>document.location.href='adensarexclui.php'</script>";
}
		
		
		
		
	?>	
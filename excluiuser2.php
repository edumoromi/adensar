<?php 
		session_start();
		$nivel_necessario = 0;
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true or $_SESSION['nivel'] > $nivel_necessario ))
		{
			
	
	

			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			unset($_SESSION['nivel']);
			$error = "Acesso Negado";
		echo "<script type='text/javascript'>alert('$error');</script>";
		  
		echo "<script type='text/javascript'>document.location.href='adensarlogin.php'</script>";
		}
 
		$logado = $_SESSION['login'];
		
		
require('configDB.php');
$usuario = $_POST['usuario'];
$procurar = "SELECT * FROM `usuario` WHERE login = '".$usuario ."'";
$deletar = "DELETE FROM `usuario` WHERE login = '".$usuario ."'";
$result = mysqli_query( $link,$procurar );
if (mysqli_num_rows($result) > 0) {
    $resulto = mysqli_query( $link,$deletar );
	$error = "Deletado com Sucesso";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
       
	 echo "<script type='text/javascript'>document.location.href='adensaradm.php'</script>";
		
		
} else {
	 $error = "Nenhum usuário encontrado";
	echo "<script type='text/javascript'>alert('$error');
		  </script>";
	echo "<script type='text/javascript'>document.location.href='excluiuser.php'</script>";
}
		
		
		
		
	?>	

<?php
require('configDB.php');
include('adensarlogin.html');
session_start();
$usuario = $_POST['user'];
$senha =  $_POST['pw'];
$sql =  "SELECT * FROM usuario WHERE (login = '".$usuario."') AND (senha = '".($senha)."')  AND (nivel = '0')";
$sql2 =  "SELECT * FROM usuario WHERE (login = '".$usuario ."') AND (senha = '".($senha) ."')";
$query = mysqli_query($link,$sql);
$query2 = mysqli_query($link,$sql2);

if (mysqli_num_rows($query) == 1) {
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['nivel'] = 0;
	header('Location: adensaradm.html');
	}
else{
	if (mysqli_num_rows($query2) == 1){
		$_SESSION['login'] = $login;
	    $_SESSION['senha'] = $senha;
	    $_SESSION['nivel'] = 1;
		header('Location: adensar.html');
	}
	else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		$error = "Usuario e/ou Senha Invalido";
		echo "<script type='text/javascript'>alert('$error');
		</script>";
	 }
}
  ?>
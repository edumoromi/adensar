<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="viewport" , initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="a.png">
	

    <title>Adensar</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <form class="form-signin" pb-autologin="true" autocomplete="off">
      <img class="d-block mx-auto mb-4" src="adensar.png" alt=""><br><br><h2>Painel Administrador</h2><br><br>
	 <button class="btn btn-lg btn-primary btn-block" type="button" onclick="consultar()">Consultar Levantamentos</button><br>
	   <button class="btn btn-lg btn-primary btn-block btn-danger" type="button" onclick="excluirl()">Excluir Levantamento</button><br>
	   	   <button class="btn btn-lg btn-primary btn-block btn-success" type="button" onclick="incluiruser()">Cadastro Usuário</button>
	   <button class="btn btn-lg btn-primary btn-block btn-danger" type="button" onclick="excluiruser()">Excluir Usuario</button><br>

	  
	   <footer class="my-5 pt-5 text-muted text-center text-small">
	    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="sair()">Sair</button> <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 Adensar</p>
        <ul class="list-inline">
         Desenvolvido por Eduardo Eiki
        </ul>
      </footer><br>
<script>
function close_window() {
  if (confirm("Fechar Janela?")) {
    window.close();
  }
}
function consultar() {
 window.location="adensar1.php"
}
function iniciar() {
 window.location="adensar2.php";  
  
}
function geo() {
 window.location="index.php";  
  
}
function incluiruser() {
 window.location="cadastrouser.php";  
  
}
function excluiruser() {
 window.location="excluiuser.php";  
  
}



function excluirl() {
 window.location="adensarexclui.php";  
  
}
function sair() {
 window.location="logout.php";  
  
}
</script>
  </form></body></html>
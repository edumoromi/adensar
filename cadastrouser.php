<!DOCTYPE html>
<html lang="pt"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="a.png">

    <title>Adensar</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
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
		?></head>
		
		<body class="bg-light">
		
		
		
		 <div class="container">
      <div class="py-5 text-center">

        <h2><img src="adensar.png" alt="adensar IMG"> </h2>
       <h2> <font color="lightgreen">Aden</font><font color="green">sar</font></h2>
		
		
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Cadastro de Usuário</h4>
          <form class="needs-validation was-validated" novalidate=""  action="cadastrouser2.php" method='post'>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Login</label>
                <input type="text" class="form-control" name="login" id="firstName"  value="" required="" >
                <div class="invalid-feedback">
                  Porfavor preencher o login.
				 
				  </div>
              </div>
			</div>
              <div class="row">
              <div class="col-md-6 mb-3">
                 <label for="firstName">Senha</label>
                <input type="password" class="form-control" name="senha" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Porfavor preencher a senha.
                </div>
              </div>
            </div>
			
			 <div class="row">
              <div class="col-md-6 mb-3">
                 <label for="firstName">Nivel de Acesso</label>(0 Adm,1 User)
				<input type="number" class="form-control" name="nivel" placeholder="" required="" min="0" max="1" >
                <div class="invalid-feedback">
                  Porfavor preencher a senha.
                </div>
              </div>
            </div>
			<hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="submit">Confirmar</button>
          </form>
		   <p class="mb-1">© 2021 Adensar</p>
        <ul class="list-inline">
         Desenvolvido por Eduardo Eiki
        </ul>
		
		
		
		
		
		
		
		
		
		
		
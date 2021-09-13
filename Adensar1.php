<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="a.png">

    <title>Adensar</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
	<link href="signin.css" rel="stylesheet"></head>
	<body class="bg-light">
	<div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="bootstrap-solid.svg" alt="" width="72" height="72">
        <h2><img src="adensar.png" alt="adensar IMG"> </h2>
       <h2> <font color="lightgreen">Aden</font><font color="green">sar</font></h2>
		
		
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Consulta</h4>
          <form class="needs-validation was-validated" novalidate=""  action="recebedados.php" method='post'>
		      <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Placa</label>
                <input type="text" class="form-control" name="placa" id="firstName" placeholder="ABCD-1234" value="" required="" pattern="[A-Z][A-Z][A-Z][A-Z]+-[0-9][0-9][0-9][0-9]">
                <div class="invalid-feedback">
                  Porfavor preencher a placa.
                </div>
               <hr class="mb-4"><br><br>
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="submit">Confirmar</button><br><br>
        <p class="mb-1">© 2021 Adensar</p>
        <ul class="list-inline">
        </ul>
      
    </div></div></form></div></div></div></body></html>
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
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			$error = "Acesso Negado";
		echo "<script type='text/javascript'>alert('$error');</script>";
		  
		echo "<script type='text/javascript'>document.location.href='adensarlogin.php'</script>";
		}
 
	$logado = $_SESSION['login'];
?>
  </head>

  <body class="bg-light">
  <!--?php
		require "config.php";
		require "connection.php";
		require "database.php";
		$link = DBConnect();
		DBClose($link);
?-->
    <div class="container">
      <div class="py-5 text-center">

        <h2><img src="adensar.png" alt="adensar IMG"> </h2>
       <h2> <font color="lightgreen">Aden</font><font color="green">sar</font></h2>
		
		
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Levantamento</h4>
          <form class="needs-validation was-validated" novalidate=""  action="inseredados.php" method='post'>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Placa</label>
                <input type="text" class="form-control" name="placa" id="firstName" placeholder="ABCD-1234" value="" required="" pattern="[A-Z][A-Z][A-Z][A-Z]+-[0-9][0-9][0-9][0-9]">
                <div class="invalid-feedback">
                  Porfavor preencher a placa.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Espécie/Nome Comum</label>
                <input type="text" class="form-control" name="especie" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Porfavor preencher a espécie/nome comum.
                </div>
              </div>
            </div>

            

            <div class="mb-3">
              <label for="email">Altura <span class="text-muted">(Cm)</span></label>
              <input type="number" class="form-control" name="altura" placeholder="" required="">
              <div class="invalid-feedback">
                Porfavor preencher o altura.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Diametro<span class="text-muted">(Cm)</span></label>
              <input type="number" class="form-control" name="diametro" placeholder="" required="">
              <div class="invalid-feedback">
                Porfavor preencher o diametro.
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Tipo de Folha</label>
                <select class="custom-select d-block w-100" name="tipofolha" required="">
				<option value="">Escolha...</option>
                  <option value="pinada">Pinada</option>
                  <option value="bipinada">Bipinada</option>
				  <option value="digitada">Digitada</option>
				  <option value="palmada">Palmada</option>
				  <option value="bifoliada">Bifoliada</option>
				  <option value="trifoliada">Trifoliada</option>
				  <option value="imparipinada">Imparipinada</option>
				  <option value="paripinada">Paripinada</option>
                </select>
                <div class="invalid-feedback">
                  Porfavor selecione um tipo de folha.
                </div>
              </div>
			  <div class="col-md-4 mb-3">
                <label for="state">Marge da Folha</label>
                <select class="custom-select d-block w-100" name="margefolha" required="">
                  <option value="">Escolha...</option>
				  <option value="inteira">Inteira</option>
                  <option value="bilobada">Bilobada</option>
				  <option value="crenada">Crenada</option>
				  <option value="dentada">Dentada</option>
				  <option value="espinhosa">Espinhosa</option>
				  <option value="fendadida">Fendadida</option>
				  <option value="lacinada">Lacinada</option>
				  <option value="lobada">Lobada</option>
				  <option value="ondulada">Ondulada</option>
				  <option value="revoluta">Revoluta</option>
				  <option value="serreada">Serreada</option>
				  <option value="trilobada">Trilobada</option>
				  <option value="tetralobada">Tetralobada</option>
				 
                </select>
                <div class="invalid-feedback">
                  Porfavor selecione um margem de folha.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Filotaxia</label>
                <select class="custom-select d-block w-100" name="filotaxia" required="">
                  <option value="">Escolha...</option>
				  <option value="Alternada Dística">Alternada Dística</option>
                  <option value="Alternada Espiralada">Alternada Espiralada</option>
				  <option value="Oposta Dística">Oposta Dística</option>
				  <option value="Oposta Cruzada">Oposta Cruzada</option>
				  <option value="Verticilada">Verticilada</option>
				  <option value="Congesta">Congesta</option>
                </select>
                <div class="invalid-feedback">
                  Porfavor selecione uma filotaxia.
                </div>
              </div>
              
            </div>
           
            <hr class="mb-4">

            <h4 class="mb-3">Espinhos</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="sim" name="espinho" value="sim" type="radio" class="custom-control-input" onclick="Mudarestado(&#39;minhaDiv&#39;) checked=" "="" required="">
                <label class="custom-control-label" for="sim">Sim</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="nao" name="espinho" value="nao" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="nao">Não</label>
              </div>
              
            </div> <div id="minhaDiv"> 
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Altura do Espinho</label>
                <input type="text" class="form-control" name="alturaespinho" placeholder="" value="0">
                <div class="invalid-feedback">
                  Porfavor selecione uma altura do espinho.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Diametro do Espinho</label>
                <input type="text" class="form-control" name="diametroespinho" placeholder="" value="0">
                <div class="invalid-feedback">
                  Porfavor selecione um diametro do espinho.
                </div>
              </div>
            </div></div> 
           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required="">
    <label class="custom-file-label" for="inputGroupFile01">Escolha a foto</label>
  </div>
  
</div><table id="myTable" border="1"> <tbody><tr><td>Latitude<input type="text" class="form-control" name="gpslat" required="" <="" td=""></td></tr>
<tr><td>Longitude<input type="text" class="form-control" name="gpslong" required="" <="" td=""></td></tr>
</tbody></table>
<div class="d-block my-3" id="demo" name="gpslat">
  <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info" onclick="getLocation()">
              <label class="custom-control-label" for="save-info">Pega GPS</label>
            </div> </div>
<div class="d-block my-3" id="demo2" name="gpslong"></div>
			 <hr class="mb-4">
           
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="submit">Confirmar</button>
          </form>
        
      

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2021 Adensar</p>
        <ul class="list-inline">
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  
 <script>
var x = document.getElementById("demo");
var y = document.getElementById("demo2");
var z = document.getElementById('myTable')
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
 
function showPosition(position) {
	
    x.innerHTML = 'Latitude<input type="text" class="form-control"  name="gpslat" value="'+ position.coords.latitude +'">';
	y.innerHTML = 'Longitude<input type="text" class="form-control" name="gpslong" value="'+ position.coords.longitude +'">';
	document.getElementById("myTable").deleteRow(0);
	document.getElementById("myTable").deleteRow(0);
    
}

function enableTxtBox1()
        {
            document.getElementById("text1").disabled = !document.getElementById("sim").checked;

}

function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }

</script>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  <title>Formulario usando PHP, Bootstrap y jQuery</title>
</head>
<body>
<div class="container">
<h1>Registro de usuarios paso a paso</h1>
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<form id="regiration_form" novalidate action="action.php"  method="post">
<fieldset>
  <h2>Paso 1: Crear su cuenta</h2>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" id="email" name="data[email]" placeholder="Email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="password" placeholder="Password">
</div>
  <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
</fieldset>
<fieldset>
  <h2> Paso 2: Agregar detalles personales</h2>
  <div class="form-group">
  <label for="fName">Nombres</label>
  <input type="text" class="form-control" name="data[fName]" id="fName" placeholder="Nombres">
</div>
<div class="form-group">
  <label for="lName">Apellidos</label>
  <input type="text" class="form-control" name="data[lName]" id="lName" placeholder="Apellidos">
</div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>
<fieldset>
  <h2>Paso 3: Información de contacto</h2>
  <div class="form-group">
  <label for="mob">Movil</label>
  <input type="text" class="form-control" id="mob" name="data[mob]" placeholder="Movil">
</div>
<div class="form-group">
  <label for="address">Direccion</label>
  <textarea  class="form-control" name="data[address]" placeholder="Direccion"></textarea>
</div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>
</form>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>
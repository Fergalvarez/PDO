<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
</head>

<body>
  <div class="container p-5">
    <input class="form-control" type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar..."></input>
    <div id="resultado">
    </div>
  </div>

  <div id="datos"></div>
    
</body>

<script>

$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: '/models/search_user.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});

</script>

</html>
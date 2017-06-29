<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
</head>
<body>
<?php include 'tpl/header.php'; ?>
	<div class="col-xs-12 buscador_clientes">

<?php
$v1 = @$_POST['i_nombres_completos'];
$v2 = @$_POST['i_dni_cliente'];
$v3 = @$_POST['i_tipo_documento'];
$v4 = @$_POST['i_nombre_servicio'];


?>
<script>
$(window).ready(function(){
	$("#input_sin_retocar").fileinput({
		uploadUrl: "path/to/file",
		language: "es",
		uploadAsync: true,
		minFileCount: 0,
		maxFileCount: 20,
		validateInitialCount: true
	});
	$("#input_retocadas").fileinput({
		uploadUrl: "path/to/file",
		language: "es",
		uploadAsync: true,
		minFileCount: 0,
		maxFileCount: 20,
		validateInitialCount: true
	});
	$('#input_sin_retocar').on('filepreupload', function(event, data, previewId, index) {

	});
	$('#input-update-excel-cuotas').on('fileuploaded', function(event, data, previewId, index) {

	});
});

/*
	El valor que debemos recibir es el value si es valor de la opcion es 1 o 2,  es INTERNO
	Sino, es EXTERNo
*/
</script>

	<div class="container">
		
		<div class="col-xs-12 agregar_servicios_vista sinpa">
			<h1>Administrar Servicio</h1>
			<form action="">
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Nombres completos</p>
					<input disabled="true" name="nombre" id="nombre" type="text" readonly value="<?php echo $v1; ?>" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">N° documento</p>
					<input disabled="true" name="dni" id="dni" type="text" readonly value="<?php echo $v2; ?>" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Tipo de servicio</p>
					<input disabled="true" name="dni" id="dni" type="text" readonly value="<?php echo $v4; ?>" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Locación</p>
					<tr><td><select name='locacion' style="width:75%;height: 27px;"> 
                		<option value='interno'>Interno</option>
                		<option value='externo'>Externo</option> 
                		</select>
                	</td></tr>
					<!--input disabled="true" name="local" id="dni" type="text" value="<?php echo $v3; ?>" class="col-xs-12 col-md-9" -->
				</div>
				<div class=" col-xs-12 individual_opciones col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Personal o Grupal</p>
					<input type="radio" id="opcion_personal" name="radio_individual" value="Personal" checked><span>Personal</span>
  					<input type="radio" id="opcion_grupal" name="radio_individual" value="Grupal"> <span> Grupal</span>
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Fecha de entrega</p>
					<input name="fecha_entrega" id="fecha_entrega" type="date" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Fecha de salida</p>
					<input class="col-xs-12 col-md-9" name="fecha_salida" id="fecha_salida" type="date" >
				</div>
				<div class=" col-xs-12 col-md-6 subir_archivos input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Fotos sin retocar</p>
					<input id="input_sin_retocar" name="input_sin_retocar[]" type="file" multiple=true class="file-loading">
				</div>
				<div class=" col-xs-12 col-md-6 subir_archivos input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Fotos retocadas</p>					
					<input id="input_retocadas" name="input_retocadas[]" type="file" multiple=true class="file-loading">
				</div>
				<div class=" col-xs-12 btn_crear_servicio input-content sinpa_sm">			
					<input id="crear_servicio" type="subtmit" value="Crear">
				</div>

			</form>
		</div>
	</div>
	
<?php include 'tpl/footer.php'; ?>
</body>
</html>



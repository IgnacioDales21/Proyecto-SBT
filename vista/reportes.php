<html>
<?php require_once('comunes/cabecera.php'); ?>
<body>

<div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
        <img src="img/logo.png" alt="" style="width:50px;">
		<label class="navbar-brand"><h3>Reportes</h3></label>
		<?php require_once('comunes/menu.php'); ?>
  </nav>
</div>  

<div class="container">
<hr/>
<br><br><hr>
</div>

<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
	<h2><strong>Gestionar Reportes</strong></h2><hr><br>
	<form method="post" action="" id="f">

		<fieldset>
    		<div class="row">
  				<div class="col">
					<label for="search" style="margin-left: 15px">Buscar:</label>
				</div>      	
				<div class="col" style="margin-left: -310px">
				<input style="width: 250px" class="form-control" type="search" id="search" name="search" minlength="1" maxlength="50" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Buscar" required>
				<span style="color: red" id="sbuscar"></span>
				</div>
  				<div class="col">
					<label for="desde" style="margin-left: -50px">Desde:</label>
				</div>  
				<div class="col" style="margin-left: -375px">
					<input style="width: 180px" class="form-control" type="date" id="desde" name="desde" required>
					<span style="color: red" id="sdesde"></span>
				</div> 
				<div class="col">
					<label for="hasta" style="margin-left: -130px">Hasta:</label>
				</div>  
				<div class="col" style="margin-left: -460px">
					<input style="width: 180px" class="form-control" type="date" id="hasta" name="hasta" required>
					<span style="color: red" id="shasta"></span>
				</div>
			</div>				
<br>
   			<div class="row">
  				<div class="col">
					<label for="tipo" style="margin-left: 15px">Tipo de inventario:</label>
				</div>  
				<div class="col" style="margin-left: -285px">
				<select style="width: 400px" class="form-control" type="text" id="tipoinvent" name="tipoinvent" required>
					<option>Inventario General de Bienes Tecnológicos</option>
					<option>Inventario de Bienes Tecnológicos Activos</option>
					<option>Inventario de Bienes Tecnológicos Desactivados</option>
				</select>
				<span style="color: red" id="stipoinvent"></span>
				</div>	
				<div class="col">
					<label for="color" style="margin-left: 0px">Tipo de Bien:</label>
				</div>   
				<div class="col" style="margin-left: -340px">
					<select style="width: 300px" class="form-control" type="text" id="tipo_bien" required name="tipo_bien">
						<optgroup label="COMPUTADOR">
							<option>PC</option>
						</optgroup>
						<optgroup label="COMPONENTES">
							<option>Monitor</option>
							<option>Gabinete/Carcasa</option>
							<option>Teclado</option>
							<option>Ratón</option>
							<option>Tarjeta Madre</option>
							<option>Tarjeta de Video</option>
							<option>Procesador (CPU)</option>
							<option>Memoria RAM</option>
							<option>Disco Duro</option>
							<option>Unidad de CD/DVD</option>
							<option>Unidad de Disquete</option>
							<option>Fuente de Poder/Cargador</option>
						</optgroup>
						<optgroup label="SOFTWARE">
							<option>Sistema Operativo</option>
						</optgroup>
						<optgroup label="PERIFÉRICOS">
							<option>Impresora</option>
							<option>Escáner</option>
							<option>Altavoces</option>
							<option>Micrófono</option>
							<option>Audífonos</option>
						</optgroup>
						<optgroup label="REDES Y TELECOMUNICACIONES">
							<option>Módem</option>
							<option>Router</option>
							<option>Switch</option>
							<option>Tarjeta de Red</option>
							<option>Teléfono</option>
						</optgroup>
						<optgroup label="REGULADOR/PROTECTOR">
							<option>Regulador de Corriente</option>
							<option>UPS/SAI</option>
						</optgroup>
						<optgroup label="OTROS">
							<option>Calculadora</option>
						</optgroup>		   				   				   			   		
					</select>
					<span style="color: red" id="stipo_bien"></span>
				</div>			
<br>
		</fieldset>

<br><br><br>

				<div class="row">
					<div class="col">
						<hr class="container" />
					</div>
				</div>

				<div class="row">
					<div class="col" style="margin-left: 410px">
						<button type="button" class="btn btn-primary" id="registrar" name="registrar"><strong>BUSCAR</strong></button>			
					</div>
					<div class="col" style="margin-left: -360px">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #00703D; border-color: black"><strong>GENERAR PDF</strong></button>	
					</div>
				</div>
			</div>
	</form>
</div><!-- fin de container -->

</body>
</html>
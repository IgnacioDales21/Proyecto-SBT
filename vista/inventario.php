<html>
<?php require_once('comunes/cabecera.php'); ?>
<body>

<div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="img/logo.png" alt="" style="width:50px;">
		<label class="navbar-brand"><h3>Inventario</h3></label>
		<?php require_once('comunes/menu.php'); ?>
  </nav>
</div>  

<div class="container">
<hr/>
<br><br><hr>
</div>

<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
<h2><strong>Planilla de Registro de Bienes</strong></h2><hr><br>

<h5 style="color:#CF160D"><strong>NOTA: Introducir los datos que apliquen con el bien o equipo tecnológico que está registrando y en los datos que no apliquen deberá introducir “N/A”, es decir, No Aplica.</strong></h5><hr><br><br>

	<form method="post" action="" id="f">

		<div class="row">
			<div class="col">
				<label for="tipo_bien">Tipo de Bien:</label>
			</div>   
			<div class="col" style="margin-left: -930px">
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
		</div>
<hr>
<br>

<div class="container">
	<h4><strong>COMPONENTES</strong></h4><hr>
	<fieldset>

<!--inicio de monitor-->		
	<legend><h5><strong>Monitor:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de monitor-->

<br>

<!--inicio de gabinete/carcasa-->	
	<legend><h5><strong>Gabinete/Carcasa:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="tipo" style="margin-left: 15px">Tipo:</label>
		</div>  
		<div class="col" style="margin-left: -220px">
			<select style="width: 250px" class="form-control" type="text" id="tipo" name="tipo" required>
				<option>Torre/Tower</option>
				<option>Escritorio/Desktop</option>
				<option>Todo en Uno/All in One</option>
				<option>Portátil/Laptop</option>
				<option>N/A</option>
			</select>
			<span style="color: red" id="stipo"></span>
		</div>
  		<div class="col">
			<label for="color" style="margin-left: 10px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -235px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div>
		<div class="col">
			<label for="marca" style="margin-left: 10px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -230px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>	
	<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -590px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -360px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -980px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
	</div>
<!--fin de gabinete/carcasa-->

<br>

<!--inicio de teclado-->
	<legend><h5><strong>Teclado:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de teclado-->

<br>

<!--inicio de ratón-->
	<legend><h5><strong>Ratón:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de ratón-->

<br>

<!--inicio de tarjeta madre-->
	<legend><h5><strong>Tarjeta Madre:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="marca" style="margin-left: 15px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -220px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
  		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -215px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: 10px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -235px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
	</div>
<!--fin de tarjeta madre-->

<br>

<!--inicio de procesador-->
	<legend><h5><strong>Procesador (CPU):</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="nombre" style="margin-left: 15px">Nombre:</label>
		</div>  
		<div class="col" style="margin-left: -490px">
			<input style="width: 250px" class="form-control" type="text" id="nombre" name="nombre" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el nombre del equipo" required>
			<span style="color: red" id="snombre"></span>
		</div> 
		<div class="col">
			<label for="velocidadghz" style="margin-left: -280px">Velocidad en GHz:</label>
		</div>  
		<div class="col" style="margin-left: -720px">
			<input style="width: 250px" class="form-control" type="text" id="velocidadghz" name="velocidadghz" minlength="4" maxlength="8" pattern="^/[.0-9]+ ?[GHz]$/" placeholder="Ingrese la velocidad en GHz" required>
			<span style="color: red" id="svelocidadghz"></span>
		</div>
	</div>
<!--fin de procesador-->

<br>

<!--inicio de memoria ram 1-->	
	<legend><h5><strong>Memoria RAM 1:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="marca" style="margin-left: 15px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -520px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div> 
		<div class="col">
			<label for="modelo" style="margin-left: -200px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -720px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="tamaño" style="margin-left: 15px">Tamaño en Mb/Gb:</label>
		</div>  
		<div class="col" style="margin-left: -430px">
			<input style="width: 250px" class="form-control" type="text" id="tamaño" name="tamaño" minlength="1" maxlength="20" pattern="^/[.0-9]+ ?([Mb]|[Gb])$/" placeholder="Ingrese el tamaño en Mb/Gb" required>
			<span style="color: red" id="stamaño"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -295px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -820px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de memoria ram 1-->

<br>

<!--inicio de memoria ram 2-->	
	<legend><h5><strong>Memoria RAM 2:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="marca" style="margin-left: 15px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -520px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div> 
		<div class="col">
			<label for="modelo" style="margin-left: -200px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -720px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="tamaño" style="margin-left: 15px">Tamaño en Mb/Gb:</label>
		</div>  
		<div class="col" style="margin-left: -430px">
			<input style="width: 250px" class="form-control" type="text" id="tamaño" name="tamaño" minlength="1" maxlength="20" pattern="^/[.0-9]+ ?([Mb]|[Gb])$/" placeholder="Ingrese el tamaño en Mb/Gb" required>
			<span style="color: red" id="stamaño"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -295px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -820px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de memoria ram 2-->

<br>

<!--inicio de disco duro 1-->	
	<legend><h5><strong>Disco Duro 1:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="marca" style="margin-left: 15px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -485px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div> 
		<div class="col">
			<label for="modelo" style="margin-left: -130px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -620px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="tamaño" style="margin-left: 15px">Tamaño en Mb/Gb/Tb:</label>
		</div>  
		<div class="col" style="margin-left: -370px">
			<input style="width: 265px" class="form-control" type="text" id="tamaño" name="tamaño" minlength="4" maxlength="8" pattern="^/[.0-9]+ ?([Mb]|[Gb]|[Tb])$/" placeholder="Ingrese el tamaño en Mb/Gb/Tb" required>
			<span style="color: red" id="stamaño"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -245px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -730px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de disco duro 1-->

<br>

<!--inicio de disco duro 2-->	
	<legend><h5><strong>Disco Duro 2:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="marca" style="margin-left: 15px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -485px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div> 
		<div class="col">
			<label for="modelo" style="margin-left: -130">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -620px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="tamaño" style="margin-left: 15px">Tamaño en Mb/Gb/Tb:</label>
		</div>  
		<div class="col" style="margin-left: -370px">
			<input style="width: 265px" class="form-control" type="text" id="tamaño" name="tamaño" minlength="4" maxlength="8" pattern="^/[.0-9]+ ?([Mb]|[Gb]|[Tb])$/" placeholder="Ingrese el tamaño en Mb/Gb/Tb" required>
			<span style="color: red" id="stamaño"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -245px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -730px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de disco duro 2-->

<br>

<!--inicio de unidad de cd/dvd-->
	<legend><h5><strong>Unidad de CD/DVD:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de unidad de cd/dvd-->

<br>

<!--inicio de unida de disquete-->	
	<legend><h5><strong>Unidad de Disquete:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de unidad de disquete-->

<br>

<!--inicio de fuente de poder/cargador-->
	<legend><h5><strong>Fuente de Poder/Cargador:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -220px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div>
  		<div class="col">
			<label for="marca" style="margin-left: 10px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -235px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
		<div class="col">
			<label for="modelo" style="margin-left: 0px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -230px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
	</div>
<br>
	<div class="row">
		<div class="col">
			<label for="watts" style="margin-left: 15px">Watts:</label>
		</div>  
		<div class="col" style="margin-left: -590px">
			<select style="width: 250px" class="form-control" type="text" id="watts" name="watts" required>
				<option>100 W</option>
				<option>150 W</option>
				<option>200 W</option>
				<option>250 W</option>
				<option>300 W</option>
				<option>350 W</option>
				<option>400 W</option>
				<option>450 W</option>
				<option>500 W</option>
				<option>550 W</option>
				<option>600 W</option>
				<option>650 W</option>
				<option>700 W</option>
				<option>750 W</option>
				<option>800 W</option>
				<option>850 W</option>
				<option>900 W</option>
				<option>950 W</option>
				<option>1000 W</option>
				<option>N/A</option>
			</select>			
			<span style="color: red" id="swatts"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -360px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -980px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
	</div>
<!--fin de fuente de poder/cargador-->
	</fieldset>

<br><br><hr><br>

<h4><strong>SOFTWARE</strong></h4><hr>
<fieldset>

<!--inicio de sistema operativo-->

    <div class="row">
  		<div class="col">
			<label for="sistemaoper" style="margin-left: 15px">Sistema Operativo:</label>
		</div>  
		<div class="col" style="margin-left: -790px">
			<input style="width: 350px" class="form-control" type="text" id="sistemaoper" name="sistemaoper" minlength="3" maxlength="50" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el sistema operativo instalado" required>
			<span style="color: red" id="ssistemaoper"></span>
		</div>
	</div>
<!--fin de sistema operativo-->
</fieldset>

<br><br><hr><br>

<h4><strong>PERIFÉRICOS</strong></h4><hr>
<fieldset>

<!--inicio de impresora-->
	<legend><h5><strong>Impresora:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de impresora-->

<br>

<!--inicio de escáner-->
	<legend><h5><strong>Escáner:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de escáner-->

<br>

<!--inicio de altavoces-->
	<legend><h5><strong>Altavoces:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de altavoces-->

<br>

<!--inicio de micrófono-->
	<legend><h5><strong>Micrófono:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de micrófono-->

<br>

<!--inicio de audífonos-->
	<legend><h5><strong>Audífonos:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de audífonos-->
</fieldset>

<br><br><hr><br>

<h4><strong>REDES Y TELECOMUNICACIONES</strong></h4><hr>
<fieldset>

<!--inicio de módem-->
	<legend><h5><strong>Módem:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de módem-->

<br>

<!--inicio de router-->
	<legend><h5><strong>Router:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de router-->

<br>

<!--inicio de switch-->
	<legend><h5><strong>Switch:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de switch-->

<br>

<!--inicio de tarjeta de red-->
	<legend><h5><strong>Tarjeta de Red:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="marca" style="margin-left: 15px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -220px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
  		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -215px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: 10px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -235px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
	</div>
<!--fin de tarjeta de red-->

<br>

<!--inicio de teléfono-->
	<legend><h5><strong>Teléfono:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de teléfono-->
</fieldset>

<br><br><hr><br>

<h4><strong>REGULADOR/PROTECTOR</strong></h4><hr>
<fieldset>

<!--inicio de regulador de corriente-->
	<legend><h5><strong>Regulador de Corriente:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de regulador de corriente-->

<br>

<!--inicio de ups/sai-->
	<legend><h5><strong>UPS/SAI:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de ups/sai-->
</fieldset>

<br><br><hr><br>

<h4><strong>OTROS</strong></h4><hr>
<fieldset>

<!--inicio de calculadora-->
	<legend><h5><strong>Calculadora:</strong></h5></legend><hr>
    <div class="row">
  		<div class="col">
			<label for="color" style="margin-left: 15px">Color:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="color" name="color" minlength="4" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese el color del equipo" required>
			<span style="color: red" id="scolor"></span>
		</div> 
		<div class="col">
			<label for="marca" style="margin-left: -310px">Marca:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="marca" name="marca" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese la marca del equipo" required>
			<span style="color: red" id="smarca"></span>
		</div>
	</div>
<br>
<div class="row">
		<div class="col">
			<label for="modelo" style="margin-left: 15px">Modelo:</label>
		</div>  
		<div class="col" style="margin-left: -565px">
			<input style="width: 250px" class="form-control" type="text" id="modelo" name="modelo" minlength="1" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el modelo del equipo" required>
			<span style="color: red" id="smodelo"></span>
		</div>
		<div class="col">
			<label for="serial" style="margin-left: -310px">Serial:</label>
		</div>  
		<div class="col" style="margin-left: -900px">
			<input style="width: 250px" class="form-control" type="text" id="serial" name="serial" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ][0-9]+"  placeholder="Ingrese el serial del equipo" required>
			<span style="color: red" id="sserial"></span>
		</div>
</div>
<!--fin de calculadora-->
</fieldset>

<br><br><br>

	<div class="row">
		<div class="col">
			<hr class="container"/>
		</div>
	</div>


	<div class="row">
		<div class="col" style="margin-left: 360px">
			<div class="container">
			   <button type="button" class="btn btn-primary" id="registrar" name="registrar"><strong>REGISTRAR</strong></button>
			</div>
		</div>
		<div class="col" style="margin-left: -300px">
			<div class="container">
			   <button type="button" class="btn btn-primary" id="consultar" data-toggle="modal" data-target="#modal1" name="consultar"><strong>CONSULTAR</strong></button>
			</div>
		</div>
	</div>

</div>
</form>
</div><!-- fin de container -->

<!-- seccion del modal -->
<div class="modal fade" tabindex="-1" role="dialog"  id="modal1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-header text-light bg-info">
        <h5 class="modal-title">Listado de Bienes Tecnológicos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-content">
		<table class="table table-striped table-hover">
		<thead>
		  <tr>
			<th>Código</th>
			<th>Tpo de Bien</th>
			<th>Estatus</th>
			<th>Ubicación</th>
			<th>Fecha de Compra</th>
			<th>Fecha de Última Actualización</th>
			<th>Comentario</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>UECI0001</td>
			<td>PC</td>
			<td>Activo</td>
			<td>Laboratorio de Informática I</td>
			<td>N/A</td>
			<td>01-04-2021</td>
			<td>N/A</td>
		  </tr>
		  <tr>
			<td>UECI0034</td>
			<td>Teclado</td>
			<td>Activo</td>
			<td>Almacén</td>
			<td>15-04-2021</td>
			<td>15-04-2021</td>
			<td>Teclado nuevo comprado como repuesto</td>
		  </tr>
		  <tr>
			<td>UECI0189</td>
			<td>Switch</td>
			<td>Inactivo</td>
			<td>Almacén</td>
			<td>N/A</td>
			<td>20-06-2021</td>
			<td>Dañado a la espera de repuesto</td>
		  </tr>
		  <tr>
			<td>UECI0144</td>
			<td>Impresora</td>
			<td>Activo</td>
			<td>Dirección</td>
			<td>01-06-2021</td>
			<td>01-06-2021</td>
			<td>N/A</td>
		  </tr>		  
		</tbody>
		</table>
    </div>
	<div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #007BDF; border-color: black"><strong>MODIFICAR</strong></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #00703D; border-color: black"><strong>ACTIVAR</strong></button>		
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #C12A2A; border-color: black"><strong>DESACTIVAR</strong></button>		
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; border-color: black"><strong>CERRAR</strong></button>
    </div>
  </div>
</div>
<!--fin de seccion modal-->
	
</div>
</body>
</html>
<html>
<?php require_once('comunes/cabecera.php'); ?>
<body>

<div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
        <img src="img/logo.png" alt="" style="width:50px;">
		<label class="navbar-brand"><h3>Gestionar Usuarios</h3></label>
		<?php require_once('comunes/menu.php'); ?>
  </nav>
</div>  

<div class="container">
<hr/>
<br><br><hr>
</div>
<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
<h2><strong>Planilla de Registro de Usuarios</strong></h2><hr><br>
<form method="post" action="" id="f">

<div class="container">
	<h4><strong>Formulario</strong></h4><hr>
	<fieldset>	
	<legend><h5><strong>Datos del Usuario:</strong></h5></legend><hr>
    <div class="row">
    	<div class="col">
			<label for="nombre" style="margin-left: 15px">Nombre:</label>
		</div> 
  		<div class="col" style="margin-left: -110px">
			<input style="width: 250px" class="form-control" type="text" id="nombre" name="nombre" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+" placeholder="Ingrese primer nombre" required>
			<span style="color: red" id="snombre"></span>
		</div>  
  		<div class="col">
			<label for="apellido" style="margin-left: 10px">Apellido:</label>
		</div>  
		<div class="col" style="margin-left: -115px">
			<input style="width: 250px" class="form-control" type="text" id="apellido" name="apellido" minlength="3" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese primer apellido" required>
			<span style="color: red" id="sapellido"></span>
		</div>
		<div class="col">
			<label for="cedula" style="margin-left: 35px">Cédula:</label>
		</div>  
		<div class="col" style="margin-left: -100px">
			<input style="width: 250px" class="form-control" type="text" id="cedula" name="cedula" minlength="7" maxlength="8" pattern="^[0-9]{7,8}$"  placeholder="Ingrese nro de cédula" required>
			<span style="color: red" id="scedula"></span>
		</div>
	</div>
<br>	
	<div class="row">
		<div class="col">
			<label for="nusuario" style="margin-left: 15px">Nombre de Usuario:</label>
		</div>  
		<div class="col" style="margin-left: -370px">
			<input style="width: 250px" class="form-control" type="text" id="nusuario" name="nusuario" minlength="8" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+"  placeholder="Ingrese nombre de usuario" required>
			<span style="color: red" id="snusuario"></span>
		</div>
		<div class="col">
			<label for="cusuario" style="margin-left: -270px">Clave de Usuario:</label>
		</div>  
		<div class="col" style="margin-left: -675px">
			<input style="width: 250px" class="form-control" type="text" id="cusuario" name="cusuario" minlength="8" maxlength="12" pattern="(?=[#$-/:-?{-~!^_`\[\]a-zA-Z]*([0-9#$-/:-?{-~!^_`\[\]]))(?=[#$-/:-?{-~!^_`\[\]a-zA-Z0-9]*[a-zA-Z])[#$-/:-?{-~!^_`\[\]a-zA-Z0-9]{4,}"  placeholder="Ingrese clave de usuario" required>
			<span style="color: red" id="scusuario"></span>
		</div>
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

</form>
</div> <!-- fin de container -->

<!-- seccion del modal -->
<div class="modal fade" tabindex="-1" role="dialog"  id="modal1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-header text-light bg-info">
        <h5 class="modal-title">Listado de Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-content">
		<table class="table table-striped table-hover">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cédula</th>
			<th>Nombre de Usuario</th>
			<th>Clave de Usuario</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>001</td>
			<td>Sol</td>
			<td>Hernandez</td>
			<td>14443976</td>
			<td>Her_2021SOl</td>
			<td>************</td>
		  </tr>
		  <tr>
			<td>023</td>
			<td>Alba</td>
			<td>Briceño</td>
			<td>10889009</td>
			<td>567$$Mari</td>
			<td>************</td>
		  </tr>
		  <tr>
			<td>015</td>
			<td>Cesar</td>
			<td>Aguilar</td>
			<td>9809179</td>
			<td>CesarInde33%</td>
			<td>************</td>
		  </tr>
		</tbody>
		</table>
    </div>
	<div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #007BDF; border-color: black"><strong>MODIFICAR</strong></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: #C12A2A; border-color: black"><strong>ELIMINAR</strong></button>		
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; border-color: black"><strong>CERRAR</strong></button>
    </div>
  </div>
</div>
<!--fin de seccion modal-->



</body>
</html>
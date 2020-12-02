<html>
<?php require_once('comunes/cabecera.php'); ?>
<body background="img/img.png">
<div class="w-100 h-100 position-absolute d-flex justify-content-center align-items-center"> <!-- todo el contenido ira dentro de esta etiqueta-->
	
	<form method="post" action="" id="f" class="w-20 bg-light p-2" style="border:2px solid #a3b0b8; border-radius:3%; height: 470px>
		<div class="container">
			<div class="text-center">
				<img src="img/usuario.png" alt="" style="width:120px;"><br><br>
				<h2 style="color: #C12A2A"><strong>Iniciar Sesión</strong></h2>
			</div>
			
			<div class="row">
				<div class="col">
					<hr/>
				</div>
			</div>

			<div class="row">
				<div class="col" style="margin-left: 0px">
					<input style="width: 250px" class="form-control" type="text" id="nusuario" name="nusuario" minlength="8" maxlength="20" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+" placeholder="Nombre de Usuario" required>
					<span style="color: red" id="snusuario"></span>
				</div>
			</div>		
			<br>
			<div class="row">
				<div class="col" style="margin-left: 0px">
					<input style="width: 250px" class="form-control" type="text" id="cusuario" name="cusuario" minlength="8" maxlength="12" pattern="(?=[#$-/:-?{-~!^_`\[\]a-zA-Z]*([0-9#$-/:-?{-~!^_`\[\]]))(?=[#$-/:-?{-~!^_`\[\]a-zA-Z0-9]*[a-zA-Z])[#$-/:-?{-~!^_`\[\]a-zA-Z0-9]{4,}"  placeholder="Clave de Usuario" required>
					<span style="color: red" id="scusuario"></span>
				</div>
			</div>


			<div class="row">
				<div class="col text-center p-2">
					<i><?php
						if(isset($mensaje)){
							echo $mensaje;
						}
					?></i>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<hr/>
				</div>
			</div>
			

			<div class="text-center">
				<a href="?pagina=principal"> <button type="button" class="btn btn-primary" id="ingresar" name="ingresar"><strong>Ingresar</strong></button></a>

				
			</div>
		</div>
	</form>
</div> <!-- fin de container -->

	<!-- <script src="js/iniciar_sesion.js"></script> -->

</body>
</html>
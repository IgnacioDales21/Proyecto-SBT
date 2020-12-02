<?php
  //verifica que exista la vista de
  //la pagina
  if(isset($_GET["logout"])){
    session_destroy();
  }
  if(isset($_SESSION['sbt']))
  {
    header("Location: /sbt/?pagina=principal");
  }
  if(is_file("vista/".$pagina.".php")){
	  //si existe se la trae, ahora ve a la carpeta vista
    //y busca el archivo principal.php 
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      require_once "modelo/BD.php";
      require_once "modelo/Persona.php";
      require_once "modelo/Usuario.php";
      $usuario = new Usuario();
      $usu = $usuario->connect()->prepare("SELECT password FROM usuarios WHERE usuario=:usuario");
      $usu->execute(["usuario"=>$_POST['usuario']]);
      $usuario = $usu->fetch(PDO::FETCH_OBJ);
      if (isset($usuario->password)) {
        if ($usuario->password == $_POST['clave']) {
          $_SESSION['sbt'] = $_POST['usuario'];
          header("Location: /sbt/?pagina=principal");
        }
        else{
          $mensaje = "Contraseña incorrecta";
        }
      }
      else{
        $mensaje = "Usuario no registrado";
      }
      
    }
	  require_once("vista/".$pagina.".php"); 
  }
  else{
	  echo "pagina en construccion";
  }
?>
<!DOCTYPE html>
<?php
//Función para auto carga de clases siguiendo las buenas prácticas de programación
spl_autoload_register(function ($clase) {
  require_once "$clase.php";
}
);
session_start();

//debe de obtener parámetros de conexión (host, user, password)

//Intentar establecer una conexión a la base de datos


//Si ha habido error conectando, obtener el mensaje

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejemplo de estilos CSS en un archivo externo</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <fieldset id="sup"style="width:70%">
            <legend>Datos de conexión</legend>
            <form action="." method="POST">
                <label for="host">Host</label>
                <input type="text" name="host" value="localhost" id="">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" value="root" id="">
                <label for="pass">Password</label>
                <input type="text" name="pass" value="root" id="">
                <input type="submit" value="Conectar" name="conectar">
            </form>

        </fieldset>

        <!-- Si hay conexión muestro las bases de datos -->
          <fieldset style="width:70%">
              <legend>Gestion de las Bases de Datos del host <span class="resaltar">host conexión</span></legend>
              <form action="tablas.php" method="post">
                  <h3>Aquí veré el listado de las bases de datos</h3>

                  <input type="submit" value="Gestionar" name="submit">
              </form>
          </fieldset>
        
    </body>
</html>

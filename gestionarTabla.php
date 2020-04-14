<?php
$msj = $_GET['msj'] ?? null; //Leo mensaje si vengo de insertar o editar ...
if (isset($_POST['submit'])) {
    switch ($_POST['submit']) {
        case "Edit":
            header ("Location:editar.php");
            exit();
            break;
        case "Del":
            $msj="He borrado un registro";
            break;
        case "Add":
            header ("Location:insertar.php");
            exit();
            break;
        case "Close":
            header ("Location:tablas.php");
            exit();
            break;
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ejemplo de estilos CSS en un archivo externo</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
        <meta charset="ISO-8859-1"
              <title></title>
    </head>

    <body>
    <h3><?=$msj ?? null?></h3>
    <fieldset id="sup"style="width:25%">
        <legend>Listado bases de datos</legend>
        <form action="tablas.php" method='POST'>
            <input type="submit" value="Volver" name="volver">
        </form>
    </fieldset>
        <fieldset style="width:70%">
            <legend>Admnistración de la tabla  <span class="resaltar">Nombre_tabla</span></legend>

            <table id="tabla" class="display" border="1">
                <thead>
                    <tr>
                       <th>Campo 1</th>
                        <th>Campo 2</th>
                        <th>Campo n</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <form action='gestionarTabla.php'  method='post'>
                      <td>valor 1</td>
                      <td>valor 2</td>
                      <td>valor n</td>
                       <td> <input id=tabla type="submit" value="Edit" name="submit"></td>
                      <td><input id=tabla type="submit" value="Del" name="submit"></td>
                  </form>
                  </tr>

                </tbody>
            </table>
            <form action='gestionarTabla.php' method='post'>
                <input type="submit" value="Add" name="submit">
                <input type="submit" value="Close" name="submit">
            </form>
        </fieldset>
    </body>
</html>

<?php

/**
 * función usada para borrar
 * Aquí puedo leer el input registros que contendrá todos los campos
 */
function borrar($tabla, $database, $datosConexion) {
  //He de leer todos los campos de esa fila que quiero borrar (nombre de campo y valor)
  $registro = $_POST['campos'];
  $sentencia = "delete from $tabla where ";
  $condicion = "";
  foreach ($registro as $campo => $valor) {
    $condicion .=" ($campo = '$valor') and ";
  }
  $condicion = substr($condicion, 0, strlen($condicion) - 4);
  $sentencia = "delete from $tabla where $condicion";
  $db = new BD($datosConexion);
  $db->usar_BD("$database");
  $db->borrar($sentencia);

  echo $db->get_error_message();
  $db->cerrarDB();
}
?>



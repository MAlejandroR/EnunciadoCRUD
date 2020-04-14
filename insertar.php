<?php
if (isset($_POST['submit'])) {
    switch ($_POST['submit']) {
        case "Guardar":
            header ("Location:gestionarTabla.php?msj=Se ha guardado un nuevo registro");
            exit();
            break;
        case "Cancelar":
            header ("Location:gestionarTabla.php?msj=Se ha cancelado la inserción ");
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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Insertar nuevo registro en la tabla <span class="resaltar">Nombre_tabla</span></legend>
            <form action="insertar.php" method="post">
                Nombre_campo1
                <input type="text" name="campo 1" id=""><br />
                Nombre_campo2
                <input type="text" name="campo 2" id=""><br />
                Nombre_campon
                <input type="text" name="campo n" id=""><br />

                <input type="submit" value="Guardar" name = submit>
                <input type="submit" value="Cancelar" name = submit>
                
            </form>
        </fieldset>

    </body>
</html>
<?php

function crea_formulario() {
  global $campos;
  foreach ($campos as $campo) {
    echo "<label for=$campo[0]>$campo[0]</label>";
    echo "<input type=text value='' name='$campo[0]' /><br />\n";
  }
}
?>




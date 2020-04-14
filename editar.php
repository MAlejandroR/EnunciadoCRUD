<?php
if (isset($_POST['submit'])) {
    switch ($_POST['submit']) {
        case "Guardar":
            header ("Location:gestionarTabla.php?msj=Se ha actualizado el registro");
            exit();
            break;
        case "Cancelar":
            header ("Location:gestionarTabla.php?msj=Se ha cancelado la actualización ");
            exit();
            break;
    }
}
?>


    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;
              charset = UTF-8" />
        <title>Ejemplo de estilos CSS en un archivo externo</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Editanto Registro de la tabla <span class="resaltar">Nombre_tabla</span></legend>
            <form action="" method="post">
                <form action="insertar.php" method="post">
                    Nombre_campo 1
                    <input type="text" name="campo 1" value="Valor campo 1"><br />
                    Nombre_campo 2
                    <input type="text" name="campo 2" value="Valor campo 2"><br />
                    Nombre_campo n
                    <input type="text" name="campo n" value="Valor campo n "><br />

                    <input type="submit" value="Guardar" name = submit>
                    <input type="submit" value="Cancelar" name = submit>
                </form>


            </form>
        </fieldset>

    </body>
</html>
<?php

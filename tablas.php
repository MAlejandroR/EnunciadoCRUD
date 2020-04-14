<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>tablas</title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset id="sup"style="width:25%">
            <legend>Listado bases de datos</legend>
            <form action="index.php" method='POST'>
                <input type="submit" value="Volver" name="volver">
            </form>
        </fieldset>

        <fieldset style="width:70%">
            <legend>Gestion de las Bases de Datos <span class="resaltar">Nombre de base de datos</span></legend>

                <form action='gestionarTabla.php' method='post'>
                <h3>Aquí un listado de las tablas</h3>
             <input type=submit value=Tabla_x name=submit>

        </form>
    </fieldset>

</body>
</html>

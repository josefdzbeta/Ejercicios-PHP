<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $servidorbd='127.0.0.1';
            $usuario='root';
            $contraseña='';
            $basedatos='bdprocedimiento';


            $conexion = mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);

            //$consulta='SELECT * FROM Alumnos';
            $consulta='SELECT Id, Nombre, Repite FROM Alumnos WHERE Id=1';


            $resultado = mysqli_query($conexion, $consulta);
            
            while($fila = mysqli_fetch_array($resultado)){
                echo $fila['Id'];
                echo $fila['Nombre'];
                echo $fila['Repite'];
            }

        ?>
    </body>
</html>
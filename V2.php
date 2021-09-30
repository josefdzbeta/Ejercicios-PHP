<?php
        function rellenar(){
            $cursos = array("1DAW", "2DAW", "1SMR", "2SMR"); 
            return $cursos;
        }
        function rellenarSelect(){
            $ciclos = rellenar();
            foreach($ciclos as $valor){
                echo "<option value='($valor)'>$valor</option>";
            }
        }
        
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="formulario.css">
        <title>Formulario</title>
    </head>
    <body>
    
        <form action="procesar.php" method="POST">
            <fieldset>
                <legend>Formulario Cursos</legend>
                <label for="lnombre">Nombre</label>
                <input type="text" name="nombre" /> <br /><br />
                <input type="checkbox" name="repite" value="repite" />Repetidor <br /><br />
                <input type="radio" name="aprobado" value="aprobado" />Aprobado <br /><br />
                <select name="ciclo">
                <?php
                   rellenarSelect();
                ?>
                </select>
                <br /><br />
                <input type="submit" name="enviar" value="enviar" />
            </fieldset> 
        </form>

           
           
       
    </body>
</html>
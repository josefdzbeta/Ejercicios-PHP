<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php

         /*   $mes=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");

            foreach($mes as $indice =>$valor){

                echo "el valor de ".$indice." es ".$valor."<br />";

            }
            */
            
            $mes[1]="enero";
            $mes[2]="febrero";
            $mes[3]="marzo";
            $mes[4]="abril";
            $mes[5]="mayo";
            $mes[6]="junio";
            $mes[7]="julio";
            $mes[8]="agosto";
            $mes[9]="septiembre";
            $mes[10]="octubre";
            $mes[11]="noviembre";
            $mes[12]="diciembre";

            foreach($mes as $valor){

                echo $valor."<br \>";

            }

            $numMes=4;
            echo "<br \><br \><br \> el mes ".$numMes." es ".$mes[$numMes]." <br \><br \><br \> ";

            for($i=1; $i<=12;$i++){
                echo $mes[$i]."<br />";
            }
            echo "<br /><br />";
            print_r($mes);
            echo "<br /><br />";
            echo "<table border=1>";
                echo "<tr>";
                    foreach($mes as $indice => $valor){
                    echo "<td>".$indice."</td>" ;    
                    }
                echo "</tr>";
                echo "<tr>";
                    foreach($mes as $indice => $valor){
                    echo "<td>".$valor. "</td>" ;    
                    }
                echo "</tr>";
            echo "</table>";

            $mesdia=array( "enero"=>30, "febrero"=>28, "marzo"=>31, "abril"=>30, "mayo"=>31, "junio"=>30,
            "julio"=>31, "agosto"=>31, "septiembre"=>30, "octubre"=>31, "noviembre"=>30, "diciembre"=>31);
            echo "<br /><br />";
            echo "<table border=1>";
                echo "<tr>";
                    foreach($mesdia as $indice => $valor){
                    echo "<td>".$indice."</td>" ;    
                    }
                echo "</tr>";
                echo "<tr>";
                    foreach($mesdia as $indice => $valor){
                    echo "<td>".$valor."</td>" ;    
                    }
                echo "</tr>";
            echo "</table>";

            
            $mesesdias=array(

                1 => array("Enero" => 31),
                2 => array("Febrero" => array(28,29)),
                3 => array("Marzo" => 31),
                4 => array("Abril" => 31),
                5 => array("Mayo" => 31),
                6 => array("Junio" => 31),
                7 => array("Julio" => 31),
                8 => array("Agosto" => 31),
                9 => array("Septiembre" => 31),
                10 => array("Octubre" => 31),
                11 => array("Noviembre" => 31),
                12 => array("Diciembre" => 31)
                );
            foreach($meses[0] as $indice => $mes){
                foreach($mes[1] as $columna => $resultado){

                    echo $meses.$mes.$resultado;
                }
            }
                
        ?>



    </body>
</html>
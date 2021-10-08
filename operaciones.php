<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $operaciones = new Operaciones();
            class Operaciones
            {
            
                // Declaración de un método
                public function sumar() {
                    
                }
                public function restar(){
                    
                }
                public function multiplicar(){

                }
                public function dividir(){

                }
            }
        
        ?>
    </body>
</html>
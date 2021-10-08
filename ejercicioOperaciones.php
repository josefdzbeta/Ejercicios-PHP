<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Sumar, Restar, Dividir</h1>
        <form action="operaciones.php" method="POST">
            <input type="number" name="numero1" placeholder="Introduce Un Numero" /><br><br>
            <input type="number" name="numero2"  placeholder="Introduce Otro Numero"/><br><br>
            <label>Elige operacion a realizar</label>
            <select name="operacion" />
                <option value="Sumar">Sumar</option>
                <option value="Restar">Restar</option>
                <option value="Multiplicar"></option>
                <option value="Dividir">Dividir</option>
        </form>
        </select>
    </body>
</html>
   
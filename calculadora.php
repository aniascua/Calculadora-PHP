<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form class="caja" action="calculadora.php" method="get" action="form" autocomplete="off">
        <h1>CALCULADORA PARA SUMAR PHP</h1>
        <input type="text" name="numero1" value="" placeholder ="INGRESE UN NÚMERO">
        <input type="text" name="numero2" value="" placeholder="INGRESE OTRO NÚMERO">
        <input type="submit" name="" value="RESPUESTA">
        <output type = "number" name =""> 
    </form>
</body>
</html>

<!-- PHP! Embeded into HTML5. 
Acá esta la calculadora. Usamos un IF, donde se asegura que todo lo ingresado sean números -->
<?php
error_reporting (0);
if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
{
    $numero1 = $_GET ['numero1'];
    $numero2 = $_GET ['numero2'];
    echo $numero1 + $numero2;
}
?>

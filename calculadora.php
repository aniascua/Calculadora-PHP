<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora PHP</title>
</head>
<body>
    <form class="caja" action="calculadora.php" method="get" action="form" autocomplete="off">
        <h1>Calculadora PHP</h1>
        <input type="text" name="numero1" value="" placeholder ="Ingrese un número">
        <input type="text" name="numero2" value="" placeholder="Ingrese otro número">
        <input type="submit" name="" value="Calcular">
        <output type="number" name="resultado"></output>
    </form>

    <?php
        // Verificar que se han enviado los números
        if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2'])) {
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];

            // Sumar los números
            $suma = $numero1 + $numero2;
            echo "Suma: " . $suma . "<br>";

            // Restar los números
            $resta = $numero1 - $numero2;
            echo "Resta: " . $resta . "<br>";

            // Multiplicar los números
            $multiplicacion = $numero1 * $numero2;
            echo "Multiplicación: " . $multiplicacion . "<br>";

            // Dividir los números (verificar que no se está dividiendo por cero)
            if ($numero2 != 0) {
                $division = $numero1 / $numero2;
                echo "División: " . $division . "<br>";
            } else {
                echo "No se puede dividir por cero.<br>";
            }
        } else if (isset($_GET['numero1']) || isset($_GET['numero2'])) {
            // Si se ha ingresado al menos un número pero no los dos, mostrar un mensaje de error
            echo "Por favor ingrese dos números válidos.";
        }
    ?>
</body>
</html>

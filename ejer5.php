<?php
    $opciones=["Suma","Resta","Multiplicacion","Division"];
    if (isset($_REQUEST["aceptar"])) {
        $num1 = $_REQUEST["num1"];
        $num2 = $_REQUEST["num2"];
        $result = 0;
        $operacion = $_REQUEST["opciones"];

        switch ($operacion) {
            case 'Suma':$result = $num1 + $num2; break;
            case 'Resta':$result = $num1 - $num2; break;
            case 'Multiplicacion':$result = $num1 * $num2; break;
            case 'Division':$result = $num1 / $num2; break;
        }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA ARITMÉTICA</title>
</head>
<body>
    <form action="#" method="get">
        <label for="num1" >Numero 1</label>
        <input type="number" name="num1" value="<?php echo $num1 ?>"><br>
        <label for="num1">Numero 2</label>
        <input type="number" name="num2" value="<?php echo $num2 ?>"><br>
        <label for="ope">Operación</label>
        <select name="opciones" id="opciones">
            <?php 
                foreach ($opciones as $opcion) { ?>
                    <option value="<?php echo $opcion ?>"><?php echo $opcion ?></option>
            <?php
                }
            ?>
        </select><br>
        <input type="submit" value="Aceptar" name="aceptar">
        <br><br>
        <input type="text" value="<?php echo $result ?>">
    </form>
</body>
</html>
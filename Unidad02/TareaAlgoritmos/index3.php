<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <h2>1.- Calcular las horas extras de un trabajador</h2>
    <?php
        $horas= [2, 1, 1, 2, 3, 1, 1, 4];
        $total = 0;
        const PRECIO = 12.5;

        foreach ($horas as $hora) {
            $total += $hora;
        }
        echo "El salario extra es de " . ($total * PRECIO) . " euros";
    ?>

    <h2>2.- Calcular la media de las subidas de los valores</h2>
    <?php
        $ibex = [
            "Santander" => 2.45,
            "Iberdrola" => 1.78,
            "BBVA" => 3.12,
            "Inditex" => 1.95,
            "Repsol" => 2.67
        ];

        $porcTotal = 0;

        foreach($ibex as $key => $value) {
            echo "$key ha subido un $value %<br>";
            $porcTotal += $value;
        }

        echo "La media de las subidas es de un " . round(($porcTotal / count($ibex)), 2) . " %";
    ?>
    <h2>3.- Introducir números en un array</h2>
    <?php
        $n = 13;
        $array = [];

        for($i = 0; $n != 0; $i++) {
            $array[$i] = $n;
            if($n > 0) {
                $n--;
            } else {
                $n++;
            }
        }

        $array[] = 0;
        sort($array);
        
        foreach($array as $a) {
            echo "$a ";
        }
        
    ?>

    <h2>4.- Crear tablas de multiplicar</h2>
    <?php
        $n = rand(1, 10);
        $array = [];
        echo "Se muestra la tabla del $n<br>";

        for($i = 0; $i <= 10; $i++) {
            $array["$n x $i"] = $n * $i;
        }

        foreach($array as $key => $value) {
            echo "<li>$key = $value</li>";
        }  
    ?>
</body>
</html>
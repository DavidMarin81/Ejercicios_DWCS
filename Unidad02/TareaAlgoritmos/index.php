<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>
    <h2>Algoritmo 5.2 - Introduce la altura en centímetros</h2>
    <?php
        $altura_cm = 105.4;
        $altura_pulgadas = round((105.4 / 2.54), 2);
        $altura_pies = round((105.4 /12), 2);

        echo "La altura introducida es $altura_cm cms<br>";
        echo "La altura en pulgadas es $altura_pulgadas<br>";
        echo "La altura en pies es $altura_pies<br>";
    ?>

    <h2>Algoritmo 5.3 - Cálculo de la función</h2>
    <?php
        # Dar valor a x
        $x = 5;
        $f = 0;
        if ($x > 0) {
            $f = pow($x, 2);
        }
        echo "El valor de la función es: $f";
    ?>

<h2>Algoritmo 5.4 - Cálculo de la ecuación de segundo grado</h2>
    <?php
        $a = 1;
        $b = 2;
        $c = 3;
        $d = (pow($b, 2)) - (4 * $a * $c);
        $aa = 2 * $a;

        if ($d >= 0) {
            $dd = sqrt($d);
            $x1 = (-$b + $dd) / $aa;
            $x2 = (-$b - $dd) / $aa;
            echo "La ecuación tiene raíces reales: $x1 y $x2";
        } else {
            $dd = sqrt(-$d);
            $re = -$b / $aa;
            $im = $dd / $aa;
            echo "La ecuación tiene raíces complejas:<br>";
            echo "Parte real: $re<br>";
            echo "Parte imaginaria: $im";
        }
    ?>

</body>
</html>
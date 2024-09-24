<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <h2>1.- Algoritmo 5.8 - Calcular la suma de los n números impares</h2>
    <?php
        $n = 10;
        $suma = 0;

        for ($i = 0; $i < $n; $i++) {
            if ($i % 2 != 0) {
                $suma += $i;
            }
        }
        echo "La suma vale : $suma";
    ?>

    <h2>2.- Algoritmo 5.9 - Calcular la fórmula con for</h2>
    <?php
        $n = 10;
        $suma = 1;
        $ter = 1;

        for ($i = 0; $i < $n; $i++) {
            $ter /= 2;
            $suma += $ter;
        }

        echo "La suma vale : $suma";
    ?>

    <h2>3.- Algoritmo 5.9 - Calcular la fórmula con while</h2>
    <?php
        $n = 10;
        $suma = 1;
        $ter = 1;

        while ($n > 0) {
            $ter /= 2;
            $suma += $ter;
            $n--;
        }

        echo "La suma vale : $suma";
    ?>

    <h2>4.- Algoritmo 5.9 - Calcular la fórmula con while</h2>
    <?php
        $n = 100;
        $suma = 1;
        $ter = 1;

        while ($n > 0) {
            $ter /= 2;
            $suma += $ter;
            if($suma >= 2) {
                break;
            }
            $n--;
        }

        echo "La suma vale : $suma";
    ?>

    <h2>5.- Algoritmo 5.10 - imprimir la lista de los divisores, en orden decreciente</h2>
    <?php
        $n = 100;
        echo "Lista de divisores del número : $n";
        $fin = 2;

        for ($i = ($n / 2); $i >= $fin; $i--) {
            if (($n % $i) == 0) {
                echo "<li>La parte entera es $i</li>";
            }
        }
    ?>

    <h2>6.- Tirada de dados</h2>
    <?php
        $contador = 0;
        do {
            $contador++;
            $num = rand(1, 6);
            echo "Tirada $contador: $num<br>";  
        } while ($num != 5);

        echo "Se tiraron $contador veces";
    ?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Unidad 02</title>
</head>
<body>
    <h2 style="background-color: yellow;">Ejercicio de variables en PHP</h2>

    <?php
        # Se crea aquí la constante del ejercicio 3 para poder usarla en el ejercicio 2
        const NUMBER = 2;
    ?>

    <?php
        # 1.- Mostrar número aleatorio
        $randomNumber = mt_rand(1, 10);
        echo "<p><b>1.- Número aleatorio:</b> $randomNumber</p>";
    ?>

    <?php
        # 2.- Multiplicando por 2 
        // Se reutiliza la variable $randomNumber y la constante NUMBER)
        $valor = $randomNumber * NUMBER;
        echo "<p><b>2.- Número x 2:</b> $valor</p>";
    ?>

    <?php
        # 3.- Crear constante
        echo "<p><b>3.- El valor de la constante es:</b>" . NUMBER;
    ?>

    <h2 style="background-color: yellow;">Ejercicio de arrays en PHP</h2>

    <?php
        # 4.- Devuelve por pantalla el número de elementos que contiene el array
        $nums = array(5,3,8,1,10,2,3);
        $total = count($nums);
        echo "<p><b>4.- Nº de elementos del array:</b> $total";
    ?>

    <?php
        # 5.- Recorre el array y multiplica cada elemento por 3
        $arrayNumbers = null;
        foreach($nums as $num) {
            $arrayNumbers .= " " . $num * 3;
        }
        echo "<p><b>5.- Números del array multiplicados por 3:</b> $arrayNumbers</p>";
    ?>

    <?php
        # 6.- Recorre el array y devuelve por pantalla únicamente los elementos múltiplos de 2
        $multiplesOf2 = null;
        foreach($nums as $num) {
            if ($num % 2 == 0) {
                $multiplesOf2 .= " " . $num;
            }
        }
        echo "<p><b>6.- Números del array múltiplos de 2:</b> $multiplesOf2</p>";
    ?>

    <?php
        # 7.- Recorre el array y devuelve la suma de todos los elementos
        $sum = null;
        foreach($nums as $num) {
            $sum += $num;
        }
        echo "<p><b>7.- Suma de todos los elementos: </b> $sum</p>";
    ?>

    <?php
        # 8.- Ahora recorre el array mostrado su clave y valor. ¿Que claves tienen?
        echo "<p><b>8.- Mostrar clave / valor del array</b></p>";
        foreach($nums as $key => $value) {
            echo "<p style='font-size: 10px;'><b>Key:</b> $key <b> => Value:</b> $value";
        }
    ?>

    <h1 style="background-color: yellow;">Oferta de trabajo</h1>

    <?php
        # Crea el siguiente array
        # Crea una página web con html donde aparezca ("Oferta de trabajo" como H1)
        # Y crear los H3 necesarios para cada elemento del array tal que:
        $array = array(
            "Titulo" => "Desarrollador backend php",
            "Descripcion" => "Desarrollo de API y páginas web en php con Laravel",
            "Sector" => "informatica",
            "Salario" => "35000",
            "Experiencia" => "2 años",
            "Modalidad" => "Teletrabajo",
            "Incorporación" => "Inmediata",
        );

        foreach($array as $key => $value) {
            echo "<h3><u>$key</u>: $value</h3>";
        }
    ?>
</body>
</html>
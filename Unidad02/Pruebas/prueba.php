<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nombre = $_POST["name"];
        $correo = $_POST['email'];
        $edad = $_POST['age'];

        echo "Name: $nombre<br>";

        if(!empty($_POST['surname'])) {
            echo "Apellidos: " . $_POST['surname'] . "<br>";
        } else {
            echo "Sin apellidos<br>";
        }

        echo "Email: $correo<br>";
        echo "Edad: $edad<br>";
        echo "Cursos:<br>";

        # isset verifica si el dato viene con datos (true) o es null (false)
        if(isset($_POST['courses'])) {
            foreach ($_POST['courses'] as $curso) {
                echo "$curso<br>";
            }
        } else {
            echo "No estas matriculado en ningún módulo";
        }
        
    }
?>
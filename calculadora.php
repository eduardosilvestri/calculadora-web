<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = 0;

        switch ($operacion) {
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                }else{
                    $resultado = "Error";
                }
                break;
                default:
                $resultado = "Operación no soportada.";
        }
    }

    echo "<h1> $resultado </h1>";
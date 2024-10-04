<?php  

    // Verifica si el parámetro 'selectedNumber' está presente y es un número válido
    if (!isset($_GET['selectedNumber'])) {
        // Redirige a una página de error si el número no es válido
        header("Location: error.php?mensaje=Numero no valido");
        exit(); //He visto aqui https://www.php.net/manual/en/function.exit.php que hay poner la funcion exit() para que funcione correctamente
    }

    $number = $_GET['selectedNumber']; // Se pasa el numero que ha venido del formulario a una variable propria
    analisisNumero(&$number); // Le pasamos la variable con el número como parámetro
    

    if ($conclusions[0]) {
        // Redirige a par.php con el número y su cuadrado
        header("Location: even.php?numero=$number");
        exit();
    } else {
        // Redirige a impar.php con el número y su cuadrado
        header("Location: odd.php?numero=$number");
        exit();
    }




    // Funciones
    //Analisa el numero y verifica si es par y devuelve true o false
    function esPar($number){
        // Bloque que evalua si el numero es par o impar

        $number * $number; // Se calcula el cuadrado, lo cual no va a afectar el resultado debido que el cuadrado de un numero es del mismo tipo que el original
        if(($number % 2) != 0){
            return false; // Si es no es divisible por 2, no es par
        }else{
           return true; // Si es es divisible por 2, es par
        }


    }

?>
<?php  

    // Verifica si el parámetro 'selectedNumber' está presente y es un número válido
    if (!isset($_GET['selectedNumber'])) {
        // Redirige a una página de error si el número no es válido
        header("Location: error.php?mensaje=Numero no valido");
        //He visto aqui https://www.php.net/manual/en/function.exit.php que hay poner la funcion exit() para que funcione correctamente
        exit();
    }

    $number = $_GET['selectedNumber']; // Se pasa el numero que ha venido del formulario a una variable propria
   
    $conclusions = analisisNumero($number); // Le pasamos la variable con el número como parámetro

    $cuadrado = $conclusions[1];

    if ($conclusions[0]) {
        // Redirige a par.php con el número y su cuadrado
        header("Location: even.php?numero=$number&cuadrado=$cuadrado");
        exit();
    } else {
        // Redirige a impar.php con el número y su cuadrado
        header("Location: odd.php?numero=$number&cuadrado=$cuadrado");
        exit();
    }

    // Funciones
    function analisisNumero($number){
        
        $conclusions = array();
        
        // Bloque que evalua si el numero es par o impar
        if(($number % 2) != 0){
            $esPar = false; // Si es no es divisible por 2, no es par
        }else{
            $esPar = true; // Si es es divisible por 2, es par
        }

        $conclusions[0] = $esPar;  // Guarda si es par o no
        $conclusions[1] = $number * $number; // Guarda el cuadrado del número

        return  $conclusions;
    }

?>
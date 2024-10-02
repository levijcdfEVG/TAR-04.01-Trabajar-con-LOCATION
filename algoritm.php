<?php  

    $number = $_GET['selectedNumber']; //Se pasa el numero que ha venido del formulario a una variable propria
   
    $conclusions = analisisNumero($number); // Le pasamos la variable con el número como parámetro
    if(!isset($conclusions)){
        header("Location: nada.html");
    }
    //Si no se ha creado array, se manda a la pagina nada

    $cuadrado = $conclusions[1];

    if ($conclusions[0]) {
        // Redirige a par.php con el número y su cuadrado
        header("Location: even.php?numero=$number&cuadrado=$cuadrado");
    } else {
        // Redirige a impar.php con el número y su cuadrado
        header("Location: odd.php?numero=$number&cuadrado=$cuadrado");
    }

    
    // Funciones
    function analisisNumero($number){
        
        $conclusions = array();
        
        //Bloque que evalua si el numero es par o impar
        if(($number % 2) != 0){
            $esPar = false; //Si es no es divisible por 2, no es par
            
        }else{
            $esPar = true; //Si es es divisible por 2, es par
        }

        $conclusions[0] = $esPar;  // Guarda si es par o no
        $conclusions[1] = $number * $number; // Guarda el cuadrado del número
        $conclusions[2] = $number;  // Guarda el número original

        return  $conclusions;
    }

?>
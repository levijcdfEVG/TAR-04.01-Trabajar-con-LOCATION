<!-- Pagina Impar -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Introducir Número</title>
        <link href="css/impar.css" rel="stylesheet" />
    </head>
    <body>
        <main>
            <h1>Resultado</h1>
            <table>
                <tr>
                    <?php
                        //Se guarda los elementos del array asociativo get en variables individuales
                        $numero = $_GET['numero'];

                        echo "<td>".$numero."</td>";
                        echo "<td>".sqrt($numero)."</td>";                         
                    ?>
                    <td>Impar</td>
                </tr>
            </table>
        </main>
    </body>
</html>
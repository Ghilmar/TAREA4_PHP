<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ejercicio 1 -->
    <div class="ejer">
        <h1>Ejercicio 1</h1>
        <?php
        $par = [];
        $impar = [];
        for ($i = 1; $i <= 20; $i++) {

            if ($i % 2 == 0) {
                $par[] = $i;
            } else {
                $impar[] = $i;
            }
        }

        echo "Números pares: " . implode(", ", $par) . "<br>";
        echo "Números impares: " . implode(", ", $impar);
        ?>
    </div>
    <!-- Ejercicio 2 -->
    <div class="ejer">
        <h1>Ejercicio 2</h1>
        <?php

        $arreglo = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];
        function ordenarBurbuja(&$arreglo)
        {
            $n = count($arreglo);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - 1 - $i; $j++) {
                    if ($arreglo[$j] > $arreglo[$j + 1]) {
                        $temp = $arreglo[$j];
                        $arreglo[$j] = $arreglo[$j + 1];
                        $arreglo[$j + 1] = $temp;
                    }
                }
            }
        }
        ordenarBurbuja($arreglo);
        echo "Arreglo ordenado: " . implode(", ", $arreglo) . "\n";
        ?>
    </div>
    <!-- Ejercicio 3 -->
    <div class="ejer">
        <h1>Ejercicio 3</h1>
        <?php

        $numeros = [23, 15, 78, 5, 42];
        $mayor = max($numeros);
        $menor = min($numeros);
        ?>

        <div class="ejer3">
            <h3>Mayor Número</h3>
            <p><?php echo $mayor; ?></p>
        </div>

        <div class="ejer3">
            <h3>Menor Número</h3>
            <p><?php echo $menor; ?></p>
        </div>
    </div>
    <!-- Ejercicio 4 -->
    <div class="ejer">
        <h1>Ejercicio 4</h1>
        <table> 
        <?php
        $filas = 8;
        $columnas = 8;

        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                // Determinar si el cuadro debe ser negro o blanco
                if (($i + $j) % 2 == 0) {
                    echo '<td class="negro"></td>';
                } else {
                    echo '<td class="blanco"></td>';
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    </div>
</body>

</html>
<style>
    .ejer {
        margin: auto;
        width: 70%;
        border: 1px solid black;
        border-radius: 10px;
        margin-top: 20px;

        h1 {
            text-align: center;
        }
    }

    .ejer3 {
        margin: auto;
        width: 70%;
        border: 5px solid red;
        border-radius: 10px;
        margin-top: 10px;

        h1 {
            text-align: center;
        }
    }
    table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .negro {
            background-color: black;
        }
        .blanco {
            background-color: blanchedalmond;
        }
</style>
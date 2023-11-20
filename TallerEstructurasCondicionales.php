<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 2 Estructuras Condicionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="Resources/LogoHead.svg" type="image/x-icon">
</head>
<body>
    
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Inicio</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-1" data-bs-toggle="tab" data-bs-target="#ejercicio-1-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 1</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-2" data-bs-toggle="tab" data-bs-target="#ejercicio-2-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ejercicio 2</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-3" data-bs-toggle="tab" data-bs-target="#ejercicio-3-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 3</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-4" data-bs-toggle="tab" data-bs-target="#ejercicio-4-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 4</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-5" data-bs-toggle="tab" data-bs-target="#ejercicio-5-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 5</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-6" data-bs-toggle="tab" data-bs-target="#ejercicio-6-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 6</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-7" data-bs-toggle="tab" data-bs-target="#ejercicio-7-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 7</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ejercicio-8" data-bs-toggle="tab" data-bs-target="#ejercicio-8-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Ejercicio 8</button>
    </li>
    </ul>

    <div class="tab-content" id="myTabContent">
    <br>
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Objetivo: </h4>
    <p>Introducirnos a la programación de algoritmos a través del manejo de las estructuras o
    instrucciones secuenciales, para tal fin aprovecharemos las ventajas que nos brinda la lógica.
    Para los siguientes puntos (cada uno) desarrollar de manera completa lo siguiente:
    </p>
    <p>Análisis del problema respondiéndose las preguntas.
    <br>a) ¿Qué me piden?
    <br>b) ¿Qué me dan?
    <br>c) ¿Cómo lo hago?</p>
    </div></div>

    <div class="tab-pane fade" id="ejercicio-1-pane" role="tabpanel" aria-labelledby="ejercicio-1" tabindex="0"><div class="alert alert-success" role="alert">
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero: </label>
        <input type="number" class="form-control" name="numeroUsuario1" placeholder="Numero 1">
        <br>
        <label for="exampleFormControlInput1" class="form-label">Ingrese otro numero: </label>
        <input type="number" class="form-control" name="numeroUsuario2" placeholder="Numero 2">
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </form>
    <?php
        $numero1 = intval($_GET["numeroUsuario1"]);
        $numero2 = intval($_GET["numeroUsuario2"]);
        
        $numeroMayor = max($numero1, $numero2);
        
        echo "El número mayor es $numeroMayor";
    ?>
    </div></div>

    <div class="tab-pane fade" id="ejercicio-2-pane" role="tabpanel" aria-labelledby="ejercicio-2" tabindex="0"><div class="alert alert-success" role="alert">
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero: </label>
        <input type="number" class="form-control" name="numeroUsuario1" placeholder="Numero 1">
        <br>
        <label for="exampleFormControlInput1" class="form-label">Ingrese otro numero: </label>
        <input type="number" class="form-control" name="numeroUsuario2" placeholder="Numero 2">
        <br>
        <label for="exampleFormControlInput1" class="form-label">Ingrese otro numero: </label>
        <input type="number" class="form-control" name="numeroUsuario3" placeholder="Numero 3">
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </form>
    <?php
        $numero1 = intval($_GET["numeroUsuario1"]);
        $numero2 = intval($_GET["numeroUsuario2"]);
        $numero3 = intval($_GET["numeroUsuario3"]);
        $numeroMayor = max($numero1, $numero2, $numero3);
        
        echo "El número mayor es $numeroMayor";
    ?>
    </div></div>

    <div class="tab-pane fade" id="ejercicio-3-pane" role="tabpanel" aria-labelledby="ejercicio-3" tabindex="0"><div class="alert alert-success" role="alert">
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero: </label>
        <input type="number" class="form-control" name="ParIm" placeholder="Numero">
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </form>
    <?php
        // Declaramos la variable
        $numero = intval($_GET["ParIm"]);
        // Comprobamos si el número es divisible por 2
        if ($numero % 2 == 0) {
            echo 'El número ' . $numero . ' es par.';
        } else {
            echo 'El número ' . $numero . ' no es par.';
        }
    ?>
    </div></div>

    <div class="tab-pane fade" id="ejercicio-4-pane" role="tabpanel" aria-labelledby="ejercicio-4" tabindex="0"><div class="alert alert-success" role="alert">
    <form action="">
        <label for="exampleFormControlInput1" class="form-label">Ingrese un numero: </label>
        <input type="number" class="form-control" name="ImparPar" placeholder="Numero">
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </form>
    <?php
        // Declaramos la variable
        $numero = intval($_GET["ImparPar"]);
        // Comprobamos si el número es divisible por 2
        if ($numero % 2 == 0) {
            echo 'El número ' . $numero . ' es par.';
        } else {
            echo 'El número ' . $numero . ' es Impar.';
        }
    ?>
    </div></div>

    <div class="tab-pane fade" id="ejercicio-5-pane" role="tabpanel" aria-labelledby="ejercicio-5" tabindex="0"><div class="alert alert-success" role="alert">
    <p> Una comercializadora de frutas, vende únicamente dos clases de frutas: peras y manzanas, el
    kilo de pera tiene un valor de $1.500 y el de manzana es de $2.500. Se debe diseñar un
    Algoritmo que permita calcular el valor a pagar por un cliente, teniendo en cuenta la
    restricción de que el cliente compra pera o manzana, pero no ambas simultáneamente.
    Además debe generar una salida que contenga lo siguiente
    <br>A. Articulo comprado
    <br>B. Valor a pagar
    <br>C. Mensaje que diga “GRACIAS POR LA COMPRA”
    </p>
    <label for="">Seleccione qué artículo desea comprar</label>
    <br>
    <br>
    <select name="articulo" id="articuloScrip" class="form-select" aria-label="Default select example" onchange="mostrarDiv()">
      <option value="null">-- Seleccione una opción --</option>
      <option value="Peras">Peras</option>
      <option value="Manzanas">Manzanas</option>
    </select>

    <div id="manzanas" class="d-none">
      <br>          
      <label for="">¿Cuántas manzanas desea llevar? Recuerde que el kilo de manzana tiene un valor de $2.500</label>
      <form action="">
        <label for="manzanasInput" class="form-label">Ingrese el kilogramo de manzanas a llevar</label>
        <input type="number" class="form-control" id="manzanasInput" name="Manzanas" placeholder="Número">
        <div class="invalid-feedback">
          Ingrese un valor válido.
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
      </form>
    </div>

    <div id="peras" class="d-none">
    <br>
      <label for="">¿Cuántas peras desea llevar? Recuerde que el kilo de pera tiene un valor de $1.500</label>
      <form action="">
        <label for="perasInput" class="form-label">Ingrese el kilogramo de peras a llevar</label>
        <input type="number" class="form-control" id="perasInput" name="Peras" placeholder="Número">
        <div class="invalid-feedback">
          Ingrese un valor válido.
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
      </form>
    </div>

    <script>
    function mostrarDiv() {
      var select = document.getElementById("articuloScrip");
      var selectedOption = select.options[select.selectedIndex].value;

      // Ocultar todos los divs
      document.getElementById("manzanas").classList.add("d-none");
      document.getElementById("peras").classList.add("d-none");

      // Mostrar el div correspondiente a la opción seleccionada
      if (selectedOption === "Manzanas") {
        document.getElementById("manzanas").classList.remove("d-none");
      } else if (selectedOption === "Peras") {
        document.getElementById("peras").classList.remove("d-none");
      }
    }
    </script>
        <?php
        /*
            // Declaramos las variables
            $articulo = $_POST("articulo");
            $valor = 0;
            $kilogramosPera = intval($_GET["Peras"]);
            $kilogramosManzana = intval($_GET["Manzanas"]);
            $totalPagar = 0;

            // Comprobamos el artículo comprado
            if ($articulo == "Peras") {
                $valor = 1500;
                $totalPagar = $kilogramosPera * $valor;
            } else if ($articulo == "Manzanas") {
                $valor = 2500;
                $totalPagar = $kilogramosManzana * $valor;
            } else {
            echo "El artículo ingresado no es válido.";
            exit;
            }

            // Imprimimos los resultados
            echo "El artículo comprado es " . $articulo . " y el valor a pagar es $" . $totalPagar . ". <br>";
            echo "GRACIAS POR SU COMPRA";
            */?>
    </div></div>
    
    <div class="tab-pane fade" id="ejercicio-6-pane" role="tabpanel" aria-labelledby="ejercicio-6" tabindex="0"><div class="alert alert-success" role="alert">
      <p> Diseñar un Algoritmo que lea las tres notas definitivas de un estudiante, las dos primeras
      equivalen cada una al 35% de la nota final y la tercera nota equivale al 30%. En total un
      estudiante necesita una nota superior o igual a 3.5/5.0 para aprobar la materia. Las notas
      digitadas deben estar entre los valores de 0.0 y 5.0.
      </p>

      <form action="" method="get">
        <label for="nota1">Nota 1: </label>
        <br>
        <input type="text" class="form-control" name="nota1" placeholder="Nota 1" pattern="[0-5](\.\d{1,2})?" title="Ingrese un número decimal entre 0.0 y 5.0">
        <br>
        <label for="nota2">Nota 2: </label>
        <br>
        <input type="text" class="form-control" name="nota2" placeholder="Nota 2" pattern="[0-5](\.\d{1,2})?" title="Ingrese un número decimal entre 0.0 y 5.0">
        <br>
        <label for="nota3">Nota 3: </label>
        <br>
        <input type="text" class="form-control" name="nota3" placeholder="Nota 3" pattern="[0-5](\.\d{1,2})?" title="Ingrese un número decimal entre 0.0 y 5.0">
        <br>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <br>
        <br>
    </form>

        <?php
    // Verificamos si se enviaron datos mediante el método GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtenemos las notas del formulario
        $nota1 = isset($_GET["nota1"]) ? floatval($_GET["nota1"]) : 0;
        $nota2 = isset($_GET["nota2"]) ? floatval($_GET["nota2"]) : 0;
        $nota3 = isset($_GET["nota3"]) ? floatval($_GET["nota3"]) : 0;

        // Calculamos la nota final
        $notaFinal = ($nota1 * 0.35) + ($nota2 * 0.35) + ($nota3 * 0.30);

        // Comprobamos si el alumno aprueba
        if ($notaFinal >= 3.5) {
            echo "El alumno aprobó con una nota de $notaFinal";
        } else {
            echo "El alumno reprobó con una nota de $notaFinal";
        }
    }
    ?>
    </div></div>
    
    <div class="tab-pane fade" id="ejercicio-7-pane" role="tabpanel" aria-labelledby="ejercicio-7" tabindex="0"><div class="alert alert-success" role="alert">
    <form method="POST">
        <label for="numerosuma1">Ingresa un número 1:</label>
        <input type="number" name="numerosuma1" id="numerosuma1">
        <br>
        <br>
        <label for="numerosuma2">Ingresa un número 2:</label>
        <input type="number" name="numerosuma2" id="numerosuma2">
        <br>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
    </form>
    <?php
    $numerosuma1 = $_POST['numerosuma1'];
    $numerosuma2 = $_POST['numerosuma2'];
    $suma = $numerosuma1 + $numerosuma2;
    ?>
    <br>
    <?php
    echo "Resultado de la suma: $suma";
    ?>
    </div></div>

    <div class="tab-pane fade" id="ejercicio-8-pane" role="tabpanel" aria-labelledby="ejercicio-8" tabindex="0"><div class="alert alert-success" role="alert">
    <form method="POST">
        <label for="cantidad">Ingresa una cantidad en pesos colombianos:</label>
        <input type="number" name="cantidad" id="cantidad">
        <br>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
    </form>
    <?php
    $cantidad = $_POST['cantidad'];
    $dolar = 2000;
    $euro = 3000;
    $totalDolar = $cantidad / $dolar;
    $totalEuro = $cantidad / $euro;
    ?>
    <br>
    <?php
    echo "Valor equivalente en dolares: $totalDolar";
    ?>
    <br>
    <?php
    echo "Valor equivalente en euros: $totalEuro";
    ?>
    </div></div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>





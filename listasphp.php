    <style>
        main {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            text-align: center;
            padding: 30px;
        }
        h3 {
            color: #2c3e50;
        }
        form {
            margin: 20px auto;
            display: inline-block;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        input[type="submit"] {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .resultado {
            margin-top: 30px;
            background: #ecf0f1;
            padding: 15px;
            border-radius: 10px;
            text-align: left;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }
        pre {
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            overflow-x: auto;
        }
    </style>

<main>
    <h3>Menú de Ejercicios</h3>

    <form method="post">
        <input type="submit" name="opcion" value="1. Listas de Números Enteros">
        <input type="submit" name="opcion" value="2. Manipulación de Lista de Nombres">
        <input type="submit" name="opcion" value="3. Contador de Palabras">
    </form>

    <div class="resultado">
    <?php
    // Función para el Ejercicio 1: Listas de Números Enteros
    function numeros() {
        echo "<h3>Ejercicio 1: Listas de Números Enteros</h3>";
        $lista = [10, 25, 3, 78, 5];

        array_push($lista, 15);
        array_splice($lista, 2, 0, 99);

        $index = array_search(25, $lista);
        if ($index !== false) unset($lista[$index]);

        $max = max($lista);
        $min = min($lista);

        echo "Número mayor (funcion max):  <strong>$max</strong><br>";
        echo "Número menor (funcion min): <strong>$min</strong><br><br>";

        echo "Lista normal: <pre>";
        print_r($lista);
        echo "</pre>";

        sort($lista);
        echo "Lista ordenada (sort): <pre>";
        print_r($lista);
        echo "</pre>";
    }

    // Función para el Ejercicio 2: Manipulación de Lista de Nombres
    function nombres() {
        echo "<h3>Ejercicio 2: Manipulación de Lista de Nombres</h3>";
        $lista = ["Juan", "Pedro", "Maria", "Ana"];
        echo "Lista original: <pre>";
        print_r($lista);
        echo "</pre>"; 
        array_unshift($lista, "Luis");
       
        echo "Lista con Luis agregado por arriba (array_unshift): <pre>";
        print_r($lista);
        echo "</pre>";  

        array_push($lista, "Martha");

        echo "Lista con Martha agregado por abajo (array_push): <pre>";
        print_r($lista);
        echo "</pre>";      

         $posicion = array_search("Ana", $lista);
        if ($posicion !== false) {
            echo "Ana está en la posición: <strong>$posicion</strong><br><br>";
        }

        $lista = array_reverse($lista);
        echo "Lista invertida: <pre>";
        print_r($lista);
        echo "</pre>";

         $posicion = array_search("Ana", $lista);
        if ($posicion !== false) {
            echo "Ana está en la posición: <strong>$posicion</strong><br><br>";
        }
    }

    // Función para el Ejercicio 3: Contador de Palabras
    function palabras() {
        echo "<h3>Ejercicio 3: Contador de Palabras</h3>";
        $texto = "El gato está en el tejado, el perro está en el patio";

         echo "Texto a evaluar: <pre>";
         echo $texto . "</pre>";


        $palabras = explode(" ", str_replace(",", "", $texto));
        $contador = array_count_values($palabras);
        $unicas = array_unique($palabras);

        echo "Conteo de palabras: <pre>";
        print_r($contador);
        echo "</pre>";

        echo "Palabras únicas: <pre>";
        print_r($unicas);
        echo "</pre>";
    }

    // Lógica del menú
    if (isset($_POST['opcion'])) {
        $opcion = $_POST['opcion'];

        switch ($opcion) {
            case "1. Listas de Números Enteros":
                numeros();
                break;
            case "2. Manipulación de Lista de Nombres":
                nombres();
                break;
            case "3. Contador de Palabras":
                palabras();
                break;
            default:
                echo "Opción no válida.";
                break;
        }
    }
    ?>
    </div>
</main>

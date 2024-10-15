<?php
// Función para el Ejercicio 1: Listas de Números Enteros
function numeros() {
    echo "Ejercicio 1: Listas de Números Enteros\n";
    // Crear una lista de números enteros
    $lista = [10, 25, 3, 78, 5];

    // Agregar un número al final de la lista
    array_push($lista, 15);

    // Insertar un número en una posición específica (posición 2)
    array_splice($lista, 2, 0, 99);

    // Eliminar un número de la lista (número 25)
    $index = array_search(25, $lista);
    if ($index !== false) {
        unset($lista[$index]);
    }

    // Mostrar el número mayor y menor de la lista
    $max = max($lista);
    $min = min($lista);

    echo "Número mayor: $max\n";
    echo "Número menor: $min\n";

    // Ordenar la lista en orden ascendente
    sort($lista);
    print_r($lista);
}

// Función para el Ejercicio 2: Manipulación de Lista de Nombres
function nombres() {
    echo "Ejercicio 2: Manipulación de Lista de Nombres\n";
    // Crear una lista de nombres
    $lista = ["Juan", "Pedro", "Maria", "Ana"];

    // Agregar un nombre al principio de la lista
    array_unshift($lista, "Luis");

    // Buscar un nombre en la lista (Ana) y mostrar su posición
    $posicion = array_search("Ana", $lista);
    if ($posicion !== false) {
        echo "Ana está en la posición: $posicion\n";
    }

    // Invertir el orden de la lista
    $lista = array_reverse($lista);
    print_r($lista);
}

// Función para el Ejercicio 3: Contador de Palabras
function palabras() {
    echo "Ejercicio 3: Contador de Palabras\n";
    // Crear un párrafo de texto
    $texto = "El gato está en el tejado, el perro está en el patio";

    // Crear una lista de palabras
    $palabras = explode(" ", str_replace(",", "", $texto));

    // Contar cuántas veces aparece cada palabra
    $contador = array_count_values($palabras);
    print_r($contador);

    // Mostrar las palabras únicas
    $unicas = array_unique($palabras);
    print_r($unicas);
}
/*
// Menú de selección
echo "Menú de Ejercicios:\n";
echo "1. Listas de Números Enteros\n";
echo "2. Manipulación de Lista de Nombres\n";
echo "3. Contador de Palabras\n";
echo "Seleccione una opción: ";

$handle = fopen ("php://stdin","r");
$opcion = trim(fgets($handle));

switch($opcion) {
    case 1:
        numeros();
        break;
    case 2:
        nombres();
        break;
    case 3:
        palabras();
        break;
    default:
        echo "Opción no válida\n";
        break;
}*/
?>

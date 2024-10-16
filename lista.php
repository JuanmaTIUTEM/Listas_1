<?php
session_start();

// Inicializar la lista si no existe
if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = [10, 25, 3, 78, 5];
}

// Función para agregar un elemento
if (isset($_POST['addElement'])) {
    $item = intval($_POST['item']);
    array_push($_SESSION['lista'], $item);
}

// Función para eliminar un elemento
if (isset($_POST['delElement'])) {
    $item = intval($_POST['item']);
    $index = array_search($item, $_SESSION['lista']);
    if ($index !== false) {
        unset($_SESSION['lista'][$index]);
        $_SESSION['lista'] = array_values($_SESSION['lista']); // Reindexar la lista
    }
}
?>
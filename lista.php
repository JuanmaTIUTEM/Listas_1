<?php 
    // Crear una lista de números enteros
    $lista = [10, 25, 3, 78, 5];

    /*if($_SERVER['REQUEST_METHOD'] == "POST"){
        print_r($_POST);
        $op = $_POST['btnAdd'];
        $item = $_POST['item'];
        addItem($lista,$item);
        //header("Location: index.php");
    }*/

    function printList($lista){
        foreach ($lista as $item) { 
            echo '<div class="border text-center">'.$item.'</div>';
         }
    }
    function addItem($lista,$item){
        array_push($lista, $item);
        print_r($lista);
    }

?>
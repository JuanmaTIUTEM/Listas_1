let lista = [10, 25, 3, 78, 5];
console.log(lista);

// Función para agregar un elemento a la lista
function addItem() {
    // Obtener el valor del input
    var item = document.getElementById('item').value;

    if (item === "") {
        alert("Por favor ingresa un número.");
        return;
    }

    // Agregar el valor convertido a número entero a la lista
    lista.push(parseInt(item));

    // Mostrar la lista actualizada en la consola
    console.log(lista);

    // Actualizar y mostrar la lista en el HTML
    mostrarLista();
}

// Función para eliminar un elemento de la lista
function delItem() {
    // Obtener el valor del input
    var item = document.getElementById('item').value;

    if (item === "") {
        alert("Por favor ingresa un número.");
        return;
    }

    // Buscar el índice del valor en la lista
    let index = lista.indexOf(parseInt(item));
    if (index !== -1) {
        // Eliminar el elemento de la lista
        lista.splice(index, 1);
        alert("Elemento eliminado: " + item);
    } else {
        alert("Elemento no encontrado en la lista.");
    }

    // Mostrar la lista actualizada en la consola
    console.log(lista);

    // Actualizar y mostrar la lista en el HTML
    mostrarLista();
}

// Función para mostrar la lista en el HTML
function mostrarLista() {
    // Seleccionar el div donde se mostrará la lista
    let listaDatosDiv = document.getElementById('listaDatos');

    // Limpiar el contenido del div
    listaDatosDiv.innerHTML = "";

    // Crear una cadena para mostrar los elementos de la lista
    let items = "";

    // Recorrer cada elemento de la lista y agregarlo a la cadena
    for (var i of lista) {
        items += i + "<br>";
    }

    // Mostrar la lista en el div
    listaDatosDiv.innerHTML = items;
}




/*
// Función para el Ejercicio 1: Listas de Números Enteros
function numeros() {
    console.log("Ejercicio 1: Listas de Números Enteros");
    // Crear una lista de números enteros
    //let lista = [10, 25, 3, 78, 5];

    // Agregar un número al final de la lista
    lista.push(15);

    // Insertar un número en una posición específica (posición 2)
    lista.splice(2, 0, 99);

    // Eliminar un número de la lista (número 25)
    let index = lista.indexOf(25);
    if (index !== -1) {
      lista.splice(index, 1);
    }

    // Mostrar el número mayor y menor de la lista
    let max = Math.max(...lista);
    let min = Math.min(...lista);

    console.log("Número mayor:", max);
    console.log("Número menor:", min);

    // Ordenar la lista en orden ascendente
    lista.sort((a, b) => a - b);
    console.log(lista);
    
}

// Función para el Ejercicio 2: Manipulación de Lista de Nombres
function nombres() {
    console.log("Ejercicio 2: Manipulación de Lista de Nombres");
    // Crear una lista de nombres
    //let lista = ["Juan", "Pedro", "Maria", "Ana"];

    // Agregar un nombre al principio de la lista
    lista.unshift("Luis");

    // Buscar un nombre en la lista (Ana) y mostrar su posición
    let posicion = lista.indexOf("Ana");
    if (posicion !== -1) {
      console.log("Ana está en la posición:", posicion);
    }

    // Invertir el orden de la lista
    lista.reverse();
    console.log(lista);
    
}

// Función para el Ejercicio 3: Contador de Palabras
function palabras() {
    console.log("Ejercicio 3: Contador de Palabras");
    // Crear un párrafo de texto
    let texto = "El gato está en el tejado, el perro está en el patio";

    // Crear una lista de palabras
    let palabras = texto.replace(/,/g, "").split(" ");

    // Contar cuántas veces aparece cada palabra
    let contador = {};
    palabras.forEach(palabra => {
      contador[palabra] = (contador[palabra] || 0) + 1;
    });
    console.log(contador);

    // Mostrar las palabras únicas
    let unicas = [...new Set(palabras)];
    console.log(unicas);
    
}

// Menú de selección
let opcion = prompt("Menú de Ejercicios:\n1. Listas de Números Enteros\n2. Manipulación de Lista de Nombres\n3. Contador de Palabras\nSeleccione una opción:");

switch (parseInt(opcion)) {
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
        console.log("Opción no válida");
}*/

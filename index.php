<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listas JS y PHP</title>

	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header class="text-center">
        <h1>Listas en Programación</h1>
    </header>
	<main class="border border-2 container">
		<div class="container mt-3">
		  <ul class="nav nav-tabs" role="tablist">
		    <li class="nav-item active">
		      <a class="nav-link" data-bs-toggle="tab" href="#home">Listas</a>
		    </li>
		    <li class="nav-item "  style="display: none;">
		      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Listas PHP</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" data-bs-toggle="tab" href="#menu2">Listas JavaScript</a>
		    </li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div id="home" class="container tab-pane fade mt-1 p-2 ps-3 w-75"><br>
		    	<div id="accordion">
		    	    <div class="card">
		    	      <div class="card-header">
		    	        <a class="btn" data-bs-toggle="collapse" href="#introduccion">
		    	          <h2>Introducción</h2>
		    	        </a>
		    	      </div>
		    	      <div id="introduccion" class="collapse show" data-bs-parent="#accordion">
		    	        <div class="card-body">
		    	          Las listas son una de las estructuras de datos más fundamentales en la programación. Permiten almacenar múltiples elementos en una sola variable, lo que facilita la organización y manipulación de datos. Las listas son especialmente útiles cuando se necesita trabajar con colecciones de datos que comparten un tipo común o están relacionados entre sí.
		    	        </div>
		    	      </div>
		    	    </div>
		    	    <div class="card">
		    	      <div class="card-header">
		    	        <a class="collapsed btn" data-bs-toggle="collapse" href="#definicion">
		    	        <h2>Definición de Listas</h2>
		    	      </a>
		    	      </div>
		    	      <div id="definicion" class="collapse" data-bs-parent="#accordion">
		    	        <div class="card-body">
		    	          Una lista es una colección ordenada de elementos, donde cada elemento se puede acceder mediante un índice. Dependiendo del lenguaje de programación, las listas pueden ser mutables (se pueden modificar después de su creación) o inmutables (no se pueden cambiar una vez creadas).
		    	        </div>
		    	      </div>
		    	    </div>
		    	    <div class="card">
		    	      <div class="card-header">
		    	        <a class="collapsed btn" data-bs-toggle="collapse" href="#tipos">
		    	          <h2>Tipos de Listas</h2>

		    	        </a>
		    	      </div>
		    	      <div id="tipos" class="collapse" data-bs-parent="#accordion">
		    	        <div class="card-body">
                            <ul>
                                <li><strong>Listas Simples:</strong> Contienen elementos de un solo tipo. Por ejemplo, una lista de números enteros.</li>
                                <li><strong>Listas Anidadas:</strong> Contienen listas como elementos, lo que permite crear estructuras más complejas, como matrices.</li>
                                <li><strong>Listas Asociativas (Diccionarios):</strong> En algunos lenguajes, las listas pueden tener índices que no son números, como cadenas de texto.</li>
                            </ul>
                        
                        
		    	        </div>
		    	      </div>
		    	    </div>
		    	    <div class="card">
		    	      <div class="card-header">
		    	        <a class="collapsed btn" data-bs-toggle="collapse" href="#ejemplo">
		    	          <h2>Ejemplo en JavaScript</h2>
		    	        </a>
		    	      </div>
		    	      <div id="ejemplo" class="collapse" data-bs-parent="#accordion">
		    	        <div class="card-body">
                            <pre><code id="ejemploCodigo">
                              // Declaración de una lista de números
	              		      let numeros = [10, 20, 30, 40];

	              		      // Agregar un nuevo número
	              		      numeros.push(50);

	              		      // Eliminar el número 20
	              		      let index = numeros.indexOf(20);
	              		      if (index > -1) {
	              		          numeros.splice(index, 1);
	              		      }

	              		      // Recorrer la lista
	              		      numeros.forEach(num => {
	              		          console.log(num);
	              		      });
	              		    </code></pre>
		    	        </div>
		    	      </div>
		    	    </div>
		    	    <div class="card">
		    	      <div class="card-header">
		    	        <a class="collapsed btn" data-bs-toggle="collapse" href="#ventajas">
		    	          <h2>Ventajas de Usar Listas</h2>
		    	        </a>
		    	      </div>
		    	      <div id="ventajas" class="collapse" data-bs-parent="#accordion">
		    	        <div class="card-body">
		    	        	<ul>
		    	        		<li><strong>Flexibilidad:</strong> Las listas permiten almacenar un número variable de elementos.</li>
		    	        		<li><strong>Fácil de Manipular:</strong>Ofrecen métodos integrados para realizar operaciones comunes, como ordenar, filtrar y buscar elementos.</li>
		    	        		<li><strong>Eficiencia:</strong> Ayudan a organizar datos de manera que se puedan acceder y modificar rápidamente.</li>
		    	        	</ul>
		    	        </div>
		    	      </div>
		    	    </div>
		    	    <div class="card">
		    	      <div class="card-header">
		    	        <a class="collapsed btn" data-bs-toggle="collapse" href="#conclusion">
		    	          <h2>Conclusión</h2>
		    	        </a>
		    	      </div>
		    	      <div id="conclusion" class="collapse" data-bs-parent="#accordion">
		    	        <div class="card-body">
		    	        	Las listas son una herramienta poderosa en la programación, ya que permiten a los desarrolladores manejar y manipular datos de forma eficiente. Con una comprensión sólida de las listas, los programadores pueden implementar soluciones más complejas y efectivas en sus aplicaciones.
		    	        </div>
		    	      </div>
		    	    </div>
		    	  </div>
		    	</div>
		    <div id="menu1" class="container tab-pane fade w-75" ><br>
		      <h3>Listas en PHP <hr></h3>
		              
              <!-- Formulario para agregar o eliminar elementos -->
              <form method="post" action="">
                  <div class="d-flex justify-content-end">
                      <div class="input-group w-25">
                          <span class="input-group-text text-center">Item: </span>
                          <input type="number" min="0" max="9999" class="form-control" value="0" name="item" id="item">
                      </div>
                  </div>

                  <div class="d-flex justify-content-around p-2 mt-3">
                      <div>
                          <button class="btn btn-success" name="addElement">Agregar elemento</button>
                      </div>

                      <div>
                          <button class="btn btn-info" name="delElement">Extraer elemento</button>
                      </div>

                      <div>
                          <button class="btn btn-secondary" name="showList">Ver lista</button>
                      </div>
                  </div>
              </form>

              <!-- Mostrar la lista -->
              <br>
              <div id="listaDatos" class="border border-2 p-3">
                  <?php
                  if (isset($_SESSION['lista'])) {
                      foreach ($_SESSION['lista'] as $item) {
                          echo "<div>$item</div>";
                      }
                  }
                  ?>
              </div>
			  <br>
		    </div>
		    <div id="menu2" class="container tab-pane fade w-75"><br>
		      
		      <h3>Listas JavaScript <hr></h3>
		              <div class="d-flex justify-content-end">
		                  <div class="input-group w-25">
		                      <span class="input-group-text text-center">Item: </span>
		                      <input type="number" min="0" max="9999" class="form-control" value="0" name="item" id="item">
		                  </div>
		              </div>

		              <div class="d-flex justify-content-around p-2">
		                  <div>
		                      <button class="btn btn-success" onclick="addItem();">Agregar elemento</button>
		                  </div>

		                  <div>
		                      <button class="btn btn-info" onclick="delItem();">Extraer elemento</button>
		                  </div>

		                  <div>
		                      <button class="btn btn-secondary" onclick="mostrarLista();">Ver lista</button>
		                  </div>
		              </div>

		              <br>

		              <div id="listaDatos" class="border border-2 p-3">
		                  <!-- Aquí se mostrará la lista -->
		              </div>
		    </div>
		  </div>
		</div>
	</main>
	<footer class="text-center">
        <p>&copy; Estructura de datos Aplicadas: Unidad 3. Listas</p>
    </footer>
</body>
	<!-- Latest compiled JavaScript -->
	<script src="listas.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
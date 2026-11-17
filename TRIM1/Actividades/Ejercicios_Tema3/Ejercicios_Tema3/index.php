<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" tyep="text/css" href="estilos/estilos.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center h4">Ejercicios en PHP</h1>
        <ul class="nav nav-tabs">
            <?php
            for ($i = 1; $i <= 16; $i++) {
                $activeClass = $i === 1 ? 'active' : '';
                echo "<li class='nav-item'>
                        <a class='nav-link $activeClass' data-bs-toggle='tab' href='#ejercicio$i' role='tab' aria-controls='ejercicio$i' aria-selected='" . ($i === 1 ? "true" : "false") . "' data-tab='$i'>Ejercicio $i</a>
                    </li>";
            }
            ?>
        </ul>

        <div class="tab-content">
            <!-- Ejercicio 1 -->
            <div id="ejercicio1" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio1-tab">
                <h3>Ejercicio 1: Cara o Cruz</h3>
                <p>Escribe un script que simule el comportamiento de lanzar una moneda al aire. Se debe mostrar una
                    imagen con la cara o la cruz de la moneda cada vez que se refresque la página.</p>
                    
                

            </div>

            <!-- Ejercicio 2 -->
            <div id="ejercicio2" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio2-tab">
                <h3>Ejercicio 2: Nota </h3>
                <p>Queremos crear un script PHP que genere un número aleatorio entre
                    1 y 10 y adivine la nota que obtendrás en el curso. <br>
                    - Insuficiente: [0, 4]
                    - Suficiente: [5]
                    - Bien: [6]
                    - Notable: [7,8]
                    - Sobresaliente: [9,10]</p>


                    

            </div>

            <!-- Ejercicio 3 -->
            <div id="ejercicio3" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio3-tab">
                <h2>Ejercicio 3: Número de iguales</h2>
                <p>Dados tres números positivos y aleatorios, indicar cuántos números
                    son iguales. </p>


            </div>

            <!-- Ejercicio 4 -->
            <div id="ejercicio4" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio4-tab">
                <h2>Ejercicio 4: Número de Pares </h2>
                <p>Crea un formulario que pida al usuario un número (si no sabes cómo hacerlo crea una variable y asígnale un valor). Después en otra página, recoge ese número y muestra la suma de todos los números pares anteriores a él. Esta nueva página debe tener un link hacia el formulario (o la primera página)</p>


            </div>

            <!-- Ejercicio 5 -->
            <div id="ejercicio5" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio5-tab">
                <h2>Ejercicio 5: Tabla unicode</h2>
                <p>Crear una página PHP que muestre por pantalla la tabla UNICODE del 0 al 50000.
                    Usando la sintaxis de HTML: &#número; Ejemplo: ñ = ñ.</p>


            </div>

            <!-- Ejercicio 6 -->
            <div id="ejercicio6" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio6-tab">
                <h2>Ejercicio 6: Tabla de Multiplicar</h2>
                <p>Se desea crear un script en PHP que, generado un número aleatorio, muestre su tabla de multiplicar.</p>

            </div>

            <!-- Ejercicio 7 -->
            <div id="ejercicio7" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio7-tab">
                <h2>Ejercicio 7: FRUTAS</h2>
                <p>Se desea crear un script en PHP que indique el número de veces que aparece una fruta, dentro de una colección de frutas.
                    El programa tendrá una sola página y deberá tener la siguiente funcionalidad:<br>
                    • Cuando se cargue la página, se deberán mostrar primero entre 7 y 20 frutas al azar.<br>
                    • El código Unicode de las frutas va desde 127815 hasta 127827, es decir, desde &#127815; hasta &#127827;<br>
                    • A continuación, deberás indicar el número de veces que aparece una de las frutas (también elegida al azar).<br>
                    • En esa frase final sólo cambia la imagen de la fruta y el número, el texto puede ser siempre el mismo.</p>

            </div>

            <!-- Ejercicio 8 -->
            <div id="ejercicio8" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio8-tab">
                <h2>Ejercicio 8: Tablas</h2>
                <p>Apartado 1.- Mostrar una tabla rellenada con los números del 1 al 100.
                    Salida de ejemplo:</p>

                <p>Apartado 2.- Mostrar una tabla rellenada con emoticonos que aparezcan en cada celda de manera aleatoria cada vez que se refresque la página.
                    Utiliza para ello solo los siguientes emoticonos:<br>
                    128053;
                    128584;
                    128584;
                    128584;
                    129372; (Puedes elegir la dimensión de la tabla)</p>


            </div>

            <!-- Ejercicio 9 -->
            <div id="ejercicio9" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio9-tab">
                <h2>Ejercicio 1 (Arrays) </h2>
                <p>Escribe un script PHP que realice las siguientes acciones:<br>
                    • Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. <br>
                    • Una vez que ha inicializado el array, imprimir todos los valores que almacena.</p>

            </div>

            <!-- Ejercicio 10 -->
            <div id="ejercicio10" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio10-tab">
                <h2>Ejercicio 2 (Arrays)</h2>
                <p>Escribe un script PHP que realice las siguientes acciones:<br>
                    1) Inicializar un array (nombre $array) de 10 elementos, con valores aleatorios entre 1 y 30.<br>
                    2) Una vez que ha inicializado el array, imprima todos los valores que almacena.<br>
                    3) Calcular el valor medio de los valores del array.<br>
                    4) Mostrar el valor medio que ha calculado.<br>
                    5) Mostrar los 3 valores máximos del array<br>
                    6) Mostrar los 3 valores mínimos del array<br>
                    7) Copiar el array (en $arrayCopiado) y utilizar una función que ordene el nuevo array creado. Muestra el resultado.<br>
                    8) Elimina el segundo elemento del nuevo array ($arrayCopiado), ya ordenado. Muestra el nuevo contenido</p>


            </div>
            <div id="ejercicio11" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio11-tab">
                <h2>Ejercicio 3 (Arrays) </h2>
                <p> 1) Crea un array que contenga como clave los nombres de 5 países y como valor otro array
                    con 3 ciudades que pertenezcan a ese país.<br>
                    2) Recorre dicho array multidimensional y muestra cada país con sus respectivas
                    ciudades.</p>


            </div>
            <div id="ejercicio12" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio12-tab">
                <h2>Ejercicio 4 (Arrays) </h2>
                <p> Dado el siguiente array asociativo: array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe" => "27") <br>
                    Ordénalo de forma ascendente ordenado por valor, de forma ascendente ordenado por clave, de forma descendente ordenado por valor y de forma descendente ordenado por clave.</p>
                <p>Ascendente por VALOR:

                </p>

                <p>Ascendente por CLAVE:


                </p>
                <p>Descendente por VALOR:


                </p>
                <p>Descendente por CLAVE:


                </p>
            </div>
            <div id="ejercicio13" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio13-tab">
                <h2>Ejercicio 5 (Arrays) </h2>
                <p> Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. El resultado deberá seguir el siguiente patrón:
                    <br> "La capital de ITALIA es ROMA"
                </p>

                <ul class="list-group list-group-flush">

                </ul>
            </div>
            <div id="ejercicio14" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio14-tab">
                <h2>Ejercicio 6 (Arrays) </h2>
                <p> Escribe un script PHP que convierta el array del ejercicio anterior en un objeto JSON.</p>

            </div>
            <div id="ejercicio15" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio15-tab">
                <h2>Ejercicio 7 (Arrays) </h2>
                <p> Escribe un script PHP que realice las siguientes acciones:<br>
                    1) Inicializar un array de 50 elementos, con valores aleatorios entre 1 y 10.<br>
                    2) Muestra el array<br>
                    3) Sustituye todos los valores del array menores que 5, por la cadena “suspenso”.<br>
                    4) Muestra de nuevo el array<br>
                </p>
                <h3>El array es el siguiente:</h3>
                <ul class="list-group list-group-flush">

                </ul>
                <h3>El array modificado es:</h3>




            </div>
            <div id="ejercicio16" class="tab-pane fade" role="tabpanel" aria-labelledby="ejercicio16-tab">
                <h2>Ejercicio 8 (Arrays) </h2>
                <p> Escribe un programa en PHP que realice lo siguiente:<br>
                    • Crea un array llamado $numeros que contenga 10 números enteros aleatorios generados en el rango de 1 a 100.<br>
                    • Muestra ese array por pantalla<br>
                    • Calcula la suma de los números pares en el array $numeros.<br>
                    • Calcula la suma de los números impares en el array $numeros.<br>
                    • Muestra en pantalla el resultado, es decir, la suma de los números pares e impares en formato tabla.<br>
                </p>
                <p>Números generados aleatoriamente:

                </p>
                <!-- table -->
                <table class="table w-75 mx-auto">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Suma</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pares</td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>Impares</td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        // Almacenar el índice de la pestaña activa
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const tabIndex = this.getAttribute('data-tab');
                localStorage.setItem('activeTab', tabIndex);
            });
        });

        // Restaurar la pestaña activa al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                const tab = document.querySelector(`.nav-link[data-tab='${activeTab}']`);
                if (tab) {
                    tab.click();
                }
            }
        });
    </script>

</body>

</html>
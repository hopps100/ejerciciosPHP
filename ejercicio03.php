 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Equipo de baloncesto</title>
</head><body>
<?php
echo "Crea un script(ejercicio02.php) 
Debes crear un array asociativo de  elementos. 
Inicializarlo al declararlo.
Muestra su contenido de dos maneras, solo los nombres, 
y posición de jugador mas nombre.";
echo " Ejercicio03  <br><br>";

$equipo = array(
    'Aleros' => array('Aurelio',
        'Marianico'
    ), 
    'Pivots' => array(
        'Leopoldo',
        'Lucrecio'
    ), 
    'Bases' => array(
        'Evaristo',
        'Mohammed'
    ), 
    'Escoltas' => array(
        'Herbasio',
        'Alberto'
    ), 
    'Alapivots' => array(
       'Umberto',
        'Fernandico'
    )
); 
echo "<br>";
echo "Posicion y nombres <br> <hr>";


foreach ($equipo as $posicion=>$nombre){    
    echo"<ul>";
        echo "<li> $posicion </li>";
            echo "<ul>";
              foreach ($nombre as $clave=>$dato){
                  echo "<li> $dato </li>";
                 }
            echo"</ul>";
    echo"</ul>";
} 

?>


</body></html>
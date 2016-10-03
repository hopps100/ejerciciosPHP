 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Equipo de baloncesto</title>
</head><body>
<?php
/*Crea un script(ejercicio02.php) 
Debes crear un array asociativo de  elementos. 
Inicializarlo al declararlo.
Muestra su contenido de dos maneras, solo los nombres, 
y posición de jugador mas nombre.*/
echo " Ejercicio02  <br><br>";
$array1 = array (
    'Alero' => 'Aurelio',
    'Pivot' => 'Leopoldo',
    'Base' => 'Evaristo',
    'Escolta' => 'Herbasio' ,
    'Alapivot' => 'Umberto'
);
echo "<br>";
echo "Posicion y nombre <br> <hr>";

foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}

echo "<br>";
echo "Solo nombre: <br> <hr>";
foreach ($array1 as $position=>$element){
    echo  $element . '<br>';
}

?>

</body></html>


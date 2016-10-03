 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 6</title>
</head><body>
<?php
/*Crea un script(ejercicio01.php) 
Debes crear un array ordenado de  elementos. 
Inicializarlo al declararlo.
Muestra su contenido en un bucke for*/
echo " Ejercicio01 <hr>";
$array1 = array (
    'id' => 200,
    'nombre' => 'Iván',
    'apellido' => 'Hernández Ocejo',
    'edad' => 19 ,
    'nacionalidad' => 'Española'
);
echo "<br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
?>
</body></html>
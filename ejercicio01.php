 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
</head><body>
<?php
echo "Crea un script(ejercicio01.php) 
Debes crear un array ordenado de  elementos. 
Inicializarlo al declararlo.
Muestra su contenido en un bucle for";
echo " Ejercicio01 <hr>";

$array1 = array(200,"Iván", "Hernández Ocejo", 19, Española);


foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
?>
</body></html>
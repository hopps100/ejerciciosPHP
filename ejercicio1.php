 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 6</title>
</head><body>
<?php
//inicializamos
echo "Array ordenado inicializado en la declaración <hr>";
$array1 = array (
    'id' => 200,
    'nombre' => 'Iván',
    'apellido' => 'Hernández Ocejo',
    'edad' => 19 ,
    'nacionalidad' => 'Española'
);


//foreach clave->elemento
echo "Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
?>
</body></html>
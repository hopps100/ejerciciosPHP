 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ordenar menor a mayor</title>
</head><body>
<?php

echo "ejercicio05.php. Paso por referencia. Crea una función que ordene un array de menor a mayor. ";

$array1 = array(10,5, 2, 8, 3,15); 
$arrayAux = $array1;
function menor(&$array)
{
	$pequeño = $array[0];
	$comparar = $array[0];

	for ($i=0 ; $i < 6; $i++){
		if ($pequeño >= $comparar)  {
			$pequeño = $comparar;
		}
	} 
	 return $pequeño; 
} 
function ordenar($array1)
{
	for ($i=0 ; $i < 6; $i++){
		    $array1 = $arrayAux;
			$Auxiliar = $array1[0];
			$menorNum =menor($array1);
			$array1[0]= $menorNum;
    }
} 

foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 
echo "<hr>";
ordenar($array1);

foreach ($arrayAux as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 
?>


</body></html>
 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Mayor y menor</title>
</head><body>
<?php

$array1 = array(5,10, 2.3, 8, 3,15); 
echo "<pre>";
var_dump(array1);
echo "</pre>";
function mayor(&$array)
{
	$grande = $array[0];
	$comparar = $array[0];

	foreach ($array as $numero=>$comparar){

		if ($comparar >= $grande)  {
			$grande = $comparar;
		}
	} 


    return $grande ;
} 

$mayorNumero =mayor($array1);
echo " numero:";
echo " $mayorNumero ";

function menor(&$array)
{
	$pequeño = $array[0];
	$comparar = $array[0];

	foreach ($array as $numero=>$comparar){
		if ($pequeño >= $comparar)  {
			$pequeño = $comparar;
		}
	} 
	 return $pequeño; 
} 
echo "<br><hr><br>";
$menorNumero =menor($array1);
echo " numero:";
echo " $menorNumero ";
?>


</body></html>
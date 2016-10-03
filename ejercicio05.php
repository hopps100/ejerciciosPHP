 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ordenar menor a mayor</title>
</head><body>
<?php

function ordenar(&$array)
{
	$priemero = $array[0];
	$segundo = $array[0];
	$flag=0;
	$cambio=0;
	$i=0;
	while ($flag=0){
		for ($i = 1 ; $i < 6 ; $i++){
			$cambio=0;
			$aux=$array[$i];
			if ($array[$i-1] > $array[$i])  {
				$array[$i] = $array[$i-1];
				$array[$i-1]= $aux;

				$cambio=1;
			} 
		} 
		 if ($cambio=0){ $flag=1; }
	}
} 


$array1 = array(10,5, 2, 8, 3,15); 
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 
echo "<hr>";
ordenar($array1);


foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 
?>


</body></html>
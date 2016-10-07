<?php
require_once 'Rectangulo.php';

$rectangulo = new Rectangulo(5,3);


echo '<br>';

echo "Su superficie es ".$rectangulo->superficie();

echo '<br>';

echo "Su perimetro es ".$rectangulo->perimetro();
echo '<br>';echo '<br>';

echo "Cambiamos la base por 10 y la altura por 20.";


$rectangulo->setBase(10);

$rectangulo->setAltura(20);

echo '<br>';echo '<br>';

echo "Su superficie es ".$rectangulo->superficie();

echo '<br>';

echo "Su perimetro es ".$rectangulo->perimetro();

echo '<br>';

echo '<br>';

echo "Su altura es " . $rectangulo->getAltura();

echo '<br>';

echo "Su base es " . $rectangulo->getBase();



?>
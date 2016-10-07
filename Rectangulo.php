 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Clase rectangulo</title>
</head><body>
<?php
class Rectangulo
{
    private $_altura; 
    private $_base;
    function __construct($_base, $_altura)   //así los públicos
    {   
        //echo "Construyento nuevo rectángulo <hr> ";
        $this->_base = $_base;
        $this->_altura = $_altura;
    }

    function perimetro()
    {
        return ($this->_base*2 + $this->_altura*2);
    }

    function superficie()
    {
        return $this->_base*$this->_altura;
    }
    function getBase(){
        return  $this->_base;
    }
     function setBase($_baseN){
         $this->_base = $_baseN;
    }

     function getAltura(){
        return  $this->_altura;
    }
     function setAltura($_alturaN){
        $this->_altura = $_alturaN;
    }
}


?>


</body></html>
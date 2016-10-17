<?php
class usuario
{
    private $_nombre;
    private $_telefono;
    public function __construct($_nombre, $_telefono)
    {
        $this->_nombre = $_nombre;
        $this->_telefono = $_telefono;
       
    }


    public function getNombre()
    {
        return  $this->_nombre;
    }
    public function setNombre($_nombre)
    {
         $this->_nombre = $_nombre;
    }

    public function getTelefono()
    {
        return  $this->_telefono;
    }
    public function setTelefono($_telefono)
    {
        $this->_telefono = $_telefono;
    }
}

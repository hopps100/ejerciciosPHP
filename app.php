<?php
require_once 'usuario.php';
/*usuario

creamos usuario con constructor cogiendo el $_POST*/
class app
{
    private $_usuario;
    public function __construct()
    {
        if (isset($_POST) && !empty($_POST)) {
               $this->_usuario = new usuario($_POST[nombre], $_POST[telefono]);
        } else {
            echo "Todavía no hemos recibido nada!";
        }
        echo "usuario:  ".$this->_usuario.getNombre();
        echo "<br> telefono: ". $this->_usuario.getTelefono();
    }
}

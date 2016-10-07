 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>formulario06.php</title>
</head><body>

    <h2>Nuestro primer formulario</h2>
    <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
        <label>Introduzca nombre: </label><input type="text" value="" name="nombre"><br>
        <label> Introduzca telefono: </label><input type="password" value="" name="telefono"> <br> 
        <input type="submit" value="enviar">  
        
    </form>
    <?php  if (isset($_POST) && !empty($_POST)){
        echo "Recibido!! <hr>";
        echo "Nombre: $_POST[nombre] "; 
        echo '<br>';
        echo "Telefono: $_POST[telefono] ";
    }   else    {
         echo "Todavía no hemos recibido nada!";
    }?>


</body></html>
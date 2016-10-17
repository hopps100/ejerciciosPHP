 <!DOCTYPE html> 
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio09.php</title>
</head><body>

    <h2>Nuestro primer formulario</h2>
    <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
        <label>Introduzca nombre: </label><input type="text" value="" name="nombre"><br>
        <label> Introduzca telefono: </label><input type="password" value="" name="telefono"> <br> 
        <input type="submit" value="enviar">  
        
    </form>
    
    <?php
        require_once 'usuario.php';
        require_once 'app.php';
     
        $_app1 = new app();

    ?>


</body></html>
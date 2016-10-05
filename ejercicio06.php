 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio06.php</title>
</head><body>
    <h2>Nuestro primer formulario</h2>
    <form method="$_GET" action="localhost/Servlet1/formulario.html">
        <label>Titulo</label><input type="text" value="" name="titulo"><br>
       <!--<label>Autor</label><input type="text" value="" name="autor"><br>
        <label>Fecha de publicación</label><input type="text" value="" name="fechaPub"><br>
        <label>Estado</label><input type="text" value="" name="estado"><br>
        <label>Empleado</label><input type="text" value="" name="empleado"><br>-->
     	<label>Contraseña</label><input type="password" value="" name="contraseña"> <br> 

        Editorial: <br>
        <input type="checkbox" name="editorial[]" value="anaya"> Anaya <br>
        <input type="checkbox" name="editorial[]" value="edelvives"> Edelvives <br>     
        <input type="checkbox" name="editorial[]" value="santillana"> Santillana  <br>      

        Género:  <br>
        <select name="genero">
         <optgroup label="Grupo de generos">
           <option>Acción</option>
           <option selected>Aventura</option>
           <option>Fantasia</option>
         </optgroup>
        </select> 

        <input type="submit" value="enviar">   
    </form>

    <?php
    if(isset($_GET) && !empty($_GET)){
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Bienvenido $_GET[titulo] ";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        var_dump($_GET);
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?> 
</body></html>
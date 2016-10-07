 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio06.php</title>
</head><body>
    <p> ejercicio06.php. Formularios. Crea dos ficheros (ejercicio06.html y ejercicio06.php). En el primero construye un formulario para el registro de libros en una biblioteca. En él usa todos los tipos básicos de input: text, password, select, option, checkbox y submit. El segundo debe mostrar por pantalla los valores devueltos. Prueba $_GET, $_POST y $_REQUEST. </p>
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

    if(isset($_POST) && !empty($_POST)){
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";

        echo "Bienvenido $_POST[titulo] ";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        var_dump($_POST);
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?> 
</body></html>
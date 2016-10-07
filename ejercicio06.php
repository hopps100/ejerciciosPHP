 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio06.php</title>
</head><body>

    <?php

    if (isset($_POST) && !empty($_POST)){
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";

        echo "Bienvenido $_POST[titulo] ";
        echo "contraseña $_POST[contraseña]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?> 
</body></html>
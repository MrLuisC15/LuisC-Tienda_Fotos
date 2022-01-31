<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subida de imágenes</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estiloLogin.css">
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>
        <?php
            session_start();
            if(isset($_session['usuario'])){
                header("Location:pedidos.php");
            }
        ?>
        <nav>
            <ul>
                <li>
                    <a href="registro.html">Consigue ya tu álbum</a>
                </li>
                <li>
                    <a href="iniciosesion.html">Iniciar Sesión</a>
                </li>
            </ul>
        </nav>
        <!-- Formulario para subida de imágenes -->
        <div class="login-box">
            <h2>
                ¿Quieres tener un álbum con tus fotos preferidas?
                No dude en conseguirlo con nuestra tienda
                A un módico precio de 0,50€ por foto.<br /><br />
                <a href="registro.html">Consigue ya tu álbum</a>
            </h2>
            
        </div>
    </body>
</html>







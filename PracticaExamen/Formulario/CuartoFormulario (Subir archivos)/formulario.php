<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if (!empty($_FILES['archivoEnviado'])) {
            // Aquí se incluye el código a ejecutar cuando los datos son correctos
            
            $archivo = $_FILES['archivoEnviado'] ?? ""; //Busca si el índice 'archivoEnviado' existe en el array $_POST.

            if(!empty($archivo)){
                echo "Archivo subido";
            }

            //si se ha enviado el formulario con el boton subir
            if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
                //si ha sido subido el archivo
                if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])) {
                    // subido con éxito
                    $nombre = $_FILES['archivoEnviado']['name'];
                    move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./uploads/{$nombre}");
            
                    echo "<p>Archivo $nombre subido con éxito</p>";
                }
            }

        } else {
            // Generamos el formulario
            $archivo = $_FILES['archivoEnviado'] ?? ""; //Busca si el índice 'archivoEnviado' existe en el array $_POST.
    ?>

        <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
            Archivo: <input name="archivoEnviado" type="file" />
            <br />
            <input type="submit" name="btnSubir" value="Subir" />
        </form>
    <?php 
    } 
    ?>
</body>
</html>
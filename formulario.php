


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="formulario.php" method="post" value="">
        Nombre: <input type="text" name="nombre">
        Email:  <input type="email" name="email">
        Edad:   <input type="number" name="edad">
        Pais:   <input type="text" name="pais">
        <button type="submmit">Enviar</button>
    </form>  


    <?php

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    $pais = $_POST["pais"];

    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email)) {
       echo("El email es valido");
    } else {
        echo("Error de email");
    }

    if (preg_match("/^[a-zA-Z_-]+[a-zA-Z.-]+[a-zA-Z]$/", $nombre)) {
        echo("El nombre es valido");
     } else {
        echo "Error de nombre";
     }


     if (preg_match("/^[0-9]+[0-9]$/", $edad)) {
        echo("La edad es valida");
     } else {
        echo ("Error de edad");
     }
 
     if (preg_match("/^[a-zA-Z]+[a-zA-Z.-]+[a-zA-Z]$/", $pais)) {
         echo("El pais es valido");
      } else {
        echo ("Error de pais");
      }


      session_start();
      $_SESSION['nombre'] = $nombre;
      echo "Usuario sesion: ". $_SESSION['nombre'];
?>
</body>
</html>
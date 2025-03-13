<?php
session_start();
    if (!$_SESSION['pantalla4'] == 'check') {
        header("Location: ./pantalla4.php?error=Casi, pero no");
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Felicidades</title>

    <h1>Felicidades, has logrado librarte del sistema de seguridad.</h1>
    
</head>
<body>
    <img src="https://gifdb.com/images/high/pepe-the-frog-hacking-screen-dlpa4gsqcy3mad39.gif" alt="Foto divertida">
    <br><br>
    <a href="../proc/replay.proc.php">Volver a empezar</a>
</body>
</html>
<?php
session_start();
    if (!$_SESSION['pantalla5'] == 'check') {
        header("Location: ./pantalla2.php?error=Casi, pero no");
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades</title>
</head>
<body>
    <a href="../proc/replay.proc.php">Volver a empezar</a>
</body>
</html>
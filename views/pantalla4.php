<?php
session_start();
    if (!$_SESSION['pantalla3'] == 'check') {
        header("Location: ./pantalla3.php?error=Casi, pero no");
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nivel_final</title>
</head>
<body>
    <h1>Nivel Final</h1>

    <h3>A lo largo del Escape Room, hemos usado palabras clave en cada reto. Tu misión es tomar la primera letra de cada respuesta correcta y formar una nueva palabra secreta. Solo así podrás desbloquear la salida.</h3>
    <form action="../proc/res.proc.php" method="post">
        <label for="triletra">Palabra secreta:</label>
        <input type="text" id="triletra" name="triletra">
        
        <input type="submit" name="pantalla4">
    </form>
    <?php
        if (isset($_GET['msg'])) {
            echo "<p>Pista: " . $_GET['msg'] . "</p>";
        }

        if (isset($_GET['error'])) {
            echo "<p>Error: " . $_GET['error'] . "</p>";
        }
    ?>
</body>
</html>
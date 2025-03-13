<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Escape Room</title>
</head>
<body>
    <h1>Escape Room: El Hacker del Futuro</h1>
    <h2>Has sido atrapado en un sistema de seguridad avanzada. Solo resolviendo los acertijos podrás escapar. ¿Serás capaz de descifrar los códigos ocultos y completar los 4 desafíos?</h2>
    <ol>
        <li>Completa cada reto correctamente.</li>
        <li>Si aciertas, avanzarás al siguiente nivel.</li>
        <li>Si fallas, intenta de nuevo hasta encontrar la respuesta correcta.</li>
        <li>¡Buena suerte, hacker!</li>
    </ol>
    <form action="./proc/res.proc.php" method="post">
        <input type="submit" name="index" value="Iniciar EscapeRoom">
    </form>
    <br><br>
    <a href="./proc/replay.proc.php">Reinicio de emergencia</a>

    <?php
        
        if (isset($_GET['error'])) {
            echo "<p>Error: " . $_GET['error'] . "</p>";
        }

    ?>
</body>
</html>
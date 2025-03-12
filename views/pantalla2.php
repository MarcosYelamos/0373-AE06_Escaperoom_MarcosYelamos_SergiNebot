<?php
session_start();
    if (!$_SESSION['pantalla1'] == 'check') {
        header("Location: ./pantalla1.php?error=Casi, pero no");
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
    <h1>Adivinanza</h1>

    <h3>dada</h3>
    <form action="../proc/res.proc.php" method="post">
        <label for="html">Traducción:</label>
        <input type="text" id="html" name="html">
        
        <input type="submit" name="pantalla2">
    </form>
    <?php
        if (isset($_GET['msg'])) {
            echo "<p>Pista: " . $_GET['msg'] . "</p>";
            echo "<img src='../img/tabla_ascii.png' alt='Tabla ASCII'>";
        }

        if (isset($_GET['error'])) {
            echo "<p>Error: " . $_GET['error'] . "</p>";
        }
    ?>
</body>
</html>
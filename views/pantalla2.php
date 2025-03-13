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
    <link rel="stylesheet" href="./css/style.css">
    <title>Nivel_2</title>
</head>
<body>
    <h1>Nivel 2</h1>

    <h3>Interceptamos una transmisión secreta de un hacker. El mensaje está en binario y debemos descifrarlo para continuar. Solo aquellos que entienden el lenguaje de las máquinas podrán avanzar.</h3>
    <h3>Código a desencriptar: 01001000 01010100 01001101 01001100</h3>

    <form action="../proc/res.proc.php" method="post">
        <label for="lenguaje_prog">Respuesta:</label>
        <input type="text" id="lenguaje_prog" name="lenguaje_prog">
        
        <input type="submit" name="pantalla2">
    </form>
    <?php
        if (isset($_GET['msg'])) {
            echo "<p>Pista: " . $_GET['msg'] . "</p>";
            echo "<img src='https://i.ibb.co/svxnZ3zD/tabla-ascii.png' alt='Tabla ASCII'>";
        }

        if (isset($_GET['error'])) {
            echo "<p>Error: " . $_GET['error'] . "</p>";
        }
    ?>
</body>
</html>
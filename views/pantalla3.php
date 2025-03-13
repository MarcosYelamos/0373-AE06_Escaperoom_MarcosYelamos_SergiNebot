<?php
session_start();
    if (!$_SESSION['pantalla2'] == 'check') {
        header("Location: ./pantalla2.php?error=Casi, pero no");
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nivel_3</title>
</head>
<body>
    <h1>Nivel 3</h1>

    <h3>Un hacker ha dejado un mensaje encriptado. Para avanzar, debes descifrarlo. El mensaje ha sido cifrado con un desplazamiento de 2 posiciones en el abecedario. ¡Encuentra la frase secreta!</h3>
    <h3>Mensaje cifrado: Gn Ekhtcfq Eguct</h3>
    <form action="../proc/res.proc.php" method="post">
        <label for="frase">Traducción:</label>
        <input type="text" id="frase" name="frase">
        
        <input type="submit" name="pantalla3">
    </form>
    <?php
        if (isset($_GET['msg'])) {
            echo "<p>Pista: " . $_GET['msg'] . "</p>";
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Caesar3.svg/1200px-Caesar3.svg.png' alt='Ayuda de resolucion'>";
        }

        if (isset($_GET['error'])) {
            echo "<p>Error: " . $_GET['error'] . "</p>";
        }
    ?>
</body>
</html>
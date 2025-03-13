<?php
session_start();
    if (!$_SESSION['index'] == 'check') {
        header("Location: ../index.php?error=Tienes que iniciar pulsando el boton");
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel_1</title>
</head>
<body>
    <h1>Nivel 1</h1>

    <h3>¿Cual es el lenguaje de programación más usado en la web?</h3>

    <form action="../proc/res.proc.php" method="post">
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lenguaje" value="javascript" id="p1-1">
            <label class="form-check-label" for="p1-1">Javascript</label>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lenguaje" value="" id="p2-1">
            <label class="form-check-label" for="p2-1">Python</label>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lenguaje" id="p3-1">
            <label class="form-check-label" for="p3-1">C++</label>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lenguaje" id="p4-1">
            <label class="form-check-label" for="p4-1">PHP</label>
        </div>
        <br><br>
        <input type="submit" name="pantalla1">
        
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

<?php
// Para que el usuario inicie el escape room dandole al boton
if (isset($_POST['index'])) {
    session_start();
    $_SESSION['index'] = 'check';
    header('Location: ../views/pantalla1.php');
}

// pantalla 1
else if (isset($_POST['pantalla1']) && strtolower($_POST['lenguaje']) == 'javascript') {
    session_start();
    $_SESSION['pantalla1'] = 'check';
    header('Location: ../views/pantalla2.php');
} else if (isset($_POST['pantalla1'])) {
    header('Location: ../views/pantalla1.php?msg=Prueba con la primera');

}

// pantalla 2
else if (isset($_POST['pantalla2']) && strtolower($_POST['lenguaje_prog']) == 'html') {
    session_start();
    $_SESSION['pantalla2'] = 'check';
    header('Location: ../views/pantalla3.php');
} else if (isset($_POST['pantalla2'])) {
    header('Location: ../views/pantalla2.php?msg=Utiliza esta tabla.');

}

// Pantalla 3
else if (isset($_POST['pantalla3']) && strtolower(trim($_POST['frase'])) == 'el cifrado cesar') {
    session_start();
    $_SESSION['pantalla3'] = 'check';
    header('Location: ../views/pantalla4.php');
} else if (isset($_POST['pantalla3'])) {
    header('Location: ../views/pantalla3.php?msg=Ayudate de esta foto.');

}

// Pantalla 4
else if (isset($_POST['pantalla4']) && strtolower($_POST['triletra']) == 'jhe') {
    session_start();
    $_SESSION['pantalla4'] = 'check';
    header('Location: ../views/pantallaf.php');
} else if (isset($_POST['pantalla4'])) {
    header('Location: ../views/pantalla4.php?msg=Ejemplo: JavaScript = J');

}
?>
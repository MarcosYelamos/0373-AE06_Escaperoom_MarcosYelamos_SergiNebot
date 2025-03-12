<?php
// pantalla 1
if (isset($_POST['pantalla1']) && strtolower($_POST['lenguaje']) == 'javascript') {
    session_start();
    $_SESSION['pantalla1'] = 'check';
    header('Location: ../views/pantalla2.php');
} else if (isset($_POST['pantalla1'])) {
    header('Location: ../views/pantalla1.php?msg=Prueba con la primera');

}

// pantalla 2
else if (isset($_POST['pantalla2']) && strtolower($_POST['html']) === 'html') {
    session_start();
    $_SESSION['pantalla2'] = 'check';
    header('Location: ../views/pantalla3.php');
} else if (isset($_POST['pantalla2'])) {
    header('Location: ../views/pantalla2.php?msg=Utiliza esta tabla');

}


else if (isset($_POST['pantalla3']) && strtolower($_POST['html']) === 'html') {
    session_start();
    $_SESSION['pantalla3'] = 'check';
    header('Location: ../views/pantalla4.php');
} else if (isset($_POST['pantalla3'])) {
    header('Location: ../views/pantalla4.php?msg=Utiliza esta tabla');

}
?>
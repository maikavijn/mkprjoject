<?php
    if(isset($_POST['loguit'])){
        $_SESSION = array();
        session_destroy();
        unset($_SESSION['usernaam']);
        header('Refresh: 1; index.php');
    }
?>

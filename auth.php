<?php

session_start();


if ($_SESSION['auth'] == false || !isset($_SESSION['auth'])) {
    header('Location: index.php?login=erro2');
}

?>
<?php

    session_start();

    $autenticado = false;

    $users = array(
        array('email' => 'admin@adm.com', 'senha' => 'admin'),
        array('email' => 'user@teste.com', 'senha' => 'user'),
    );

    foreach ($users as $user) {
        if ($_REQUEST['email'] == $user['email'] && $_REQUEST['senha'] == $user['senha']) {
            $autenticado = true;
        }
    }

    if ($autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['auth'] = true;
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['auth'] = false;
    }

    
?>
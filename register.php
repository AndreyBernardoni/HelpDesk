<?php

    $titulo = str_replace('|', '-', $_POST['titulo']);
    $categoria = str_replace('|', '-', $_POST['categoria']);
    $descricao = str_replace('|', '-', $_POST['descricao']);

    $text = $titulo . "|" . $categoria . "|" . $descricao . PHP_EOL;
    
    $db = fopen("db.txt", "a");
    fwrite($db, $text);

    fclose($db);

    header("Location: abrir_chamado.php");
?>
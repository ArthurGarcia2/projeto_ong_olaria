<?php

    $hostmane = "fdb30.awardspace.net";
    $dbname = "3811863_ongolaria";
    $username = "3811863_ongolaria";
    $password = "0ng0l4ri4";

    try {
        $pdo = new PDO('mysql:host='.$hostmane.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Conexão Bem Sucedida';
    } catch (PDOException $e) {
        echo 'Conexão Mal Sucedida, Erro: '.$e->getMessage();
    }
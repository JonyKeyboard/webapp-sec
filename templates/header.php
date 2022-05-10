<?php 
    include_once("helpers/url.php");
    include_once("data/obreiros.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMEAD-CGPB</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <!--header começo-->
    <header>
        <div class="logo">
            <h3>Comead-<span>Sec</span></h3>
        </div>
        <div class="right">
            <a href="#" class="btn-sair">Sair</a>
        </div>
    </header>
    <!--header final-->
    <!--sidebar começo-->
    <div class="sidebar">
        <center>
            <img src="<?= $BASE_URL ?>/img/logo-comead.jpg" class="image" alt="">
            <h2>Secretaria</h2>
        </center>
        <a href="#"><span>Cadastro Geral</span></a>
        <a href="#"><span>Igrejas</span></a>
        <a href="#"><span>Secretaria</span></a>
        <a href="#"><span>Configurações</span></a>
    </div>
    <!--sidebar final-->
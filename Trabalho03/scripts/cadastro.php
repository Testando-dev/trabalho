<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["teste.html"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];
    $tipo = $_POST['tipo'];
    $dataCriacao = $_POST['dataCriacao'];
    $perfil = $_POST['perfil'];
    $observacoes = $_POST['observacoes'];
    $modulos = isset($_POST['modulos']) ? $_POST['modulos'] : [];

    // Aqui você pode adicionar o código para processar os dados, como salvar em um banco de dados

    echo "Dados recebidos com sucesso!";
}
?>
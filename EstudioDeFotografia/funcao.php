<?php

function conectarBanco() {
    $conexao = new PDO("mysql:host=localhost; dbname=estudiofotografia", "root", "");
    return $conexao;
}

function inserirCliente($nome, $telefone, $email) {
    try {
        $sql = "insert into cliente (nome, telefone, email) values (:nome, :telefone, :email)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":email", $email);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

function retornarClientes() {
    try {
        $sql = "select * from cliente";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}
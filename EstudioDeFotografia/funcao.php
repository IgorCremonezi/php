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

function consultarClienteId($id) {
    try {
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e) {
        return 0;
    }
}

function inserirFotografia($nome_arquivo, $descricao, $sessao) {
    try {
        $sql = "insert into fotografia (nome_arquivo, descricao, sessao) values (:nome_arquivo, :descricao, :sessao)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome_arquivo", $nome_arquivo);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":sessao", $sessao);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

function retornarFotografias() {
    try {
        $sql = "select * from fotografia";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function consultarFotografiaId($id) {
    try {
        $sql = "SELECT * FROM fotografia WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e) {
        return 0;
    }
}
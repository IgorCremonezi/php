<?php

    function conectarBanco() {
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
    }

    function retornarCategorias() {
        try {
            $sql = "select * from categoria";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function inserirProduto($nome, $descricao, $valor, $categoria) {
        try {
            $sql = "insert into produto (nome, descricao, valor, categoria_id) values (:nome, :descricao, :valor, :categoria)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    function retornarProdutos() {
        try {
            $sql = "select p.*, c.descricao as categoria from produto p
                    inner join categoria c on c.id = p.categoria_id";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function consultarProdutoId($id) {
        try {
            $sql = "SELECT * FROM produto WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e) {
            return 0;
        }
    }

    function alterarProduto($nome, $descricao, $valor, $categoria, $id) {
        try {
            $sql = "UPDATE produto SET nome = :nome, descricao = :descricao, valor = :valor, categoria_id = :categoria WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    function excluirProduto($id) {
        try {
            $sql = "DELETE FROM produto WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }
    }
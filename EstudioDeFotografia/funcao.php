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

function alterarCliente($nome, $telefone, $email, $id){
    try{ 
        $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirCliente($id){
    try{ 
        $sql = "DELETE FROM cliente WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function inserirFotografia($nome_arquivo, $descricao, $sessao) {
    try {
        $sql = "insert into fotografia (nome_arquivo, descricao, sessao_id) values (:nome_arquivo, :descricao, :sessao)";
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

function retornarSessoesFotografia(){
    try {
        $sql = "SELECT sessao.id AS id, cliente.nome AS cliente_nome FROM sessao
                JOIN cliente ON sessao.cliente_id = cliente.id";
        $conexao = conectarBanco();
        return $conexao->query($sql);
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

function alterarFotografia($nome_arquivo, $descricao, $sessao, $id){
    try{ 
        $sql = "UPDATE fotografia SET nome_arquivo = :nome_arquivo, descricao = :descricao, sessao_id = :sessao WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome_arquivo", $nome_arquivo);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":sessao", $sessao);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirFotografia($id){
    try{ 
        $sql = "DELETE FROM fotografia WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function retornarEspecialidades(){
    try {
        $sql = "SELECT * FROM especialidade";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function retornarPortifolios(){
    try {
        $sql = "SELECT * FROM portifolio";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function retornarFotografos(){
    try {
        $sql = "SELECT f.*, e.descricao as especialidade, p.descricao as portifolio FROM fotografo f
                INNER JOIN especialidade e ON e.id = f.especialidade_id
                INNER JOIN portifolio p ON p.id = f.portifolio_id";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function inserirFotografo($nome, $especialidade, $portifolio){
    try{ 
        $sql = "INSERT INTO fotografo (nome, especialidade_id, portifolio_id) VALUES (:nome, :especialidade, :portifolio)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":especialidade", $especialidade);
        $stmt->bindValue(":portifolio", $portifolio);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function consultarFotografoId($id){
    try{ 
        $sql = "SELECT * FROM fotografo WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e){
        return 0;
    }
}

function alterarFotografo($nome, $especialidade, $portifolio, $id){
    try{ 
        $sql = "UPDATE fotografo SET nome = :nome, especialidade_id = :especialidade, portifolio_id = :portifolio WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":especialidade", $especialidade);
        $stmt->bindValue(":portifolio", $portifolio);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirFotografo($id){
    try{ 
        $sql = "DELETE FROM fotografo WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function inserirSessao($data, $horario, $cliente) {
    try {
        $sql = "insert into sessao (data, horario, cliente_id) values (:data, :horario, :cliente)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":data", $data);
        $stmt->bindValue(":horario", $horario);
        $stmt->bindValue(":cliente", $cliente);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

function retornarClientesSessao(){
    try {
        $sql = "SELECT sessao.id AS id, cliente.id, cliente.nome AS cliente_nome FROM cliente
                LEFT JOIN sessao ON cliente.id = sessao.cliente_id";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function retornarSessoes() {
    try {
        $sql = "select * from sessao";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch (Exception $e) {
        return 0;
    }
}

function consultarSessaoId($id) {
    try {
        $sql = "SELECT * FROM sessao WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e) {
        return 0;
    }
}

function alterarSessao($data, $horario, $cliente, $id){
    try{ 
        $sql = "UPDATE sessao SET data = :data, horario = :horario, cliente_id = :cliente WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":data", $data);
        $stmt->bindValue(":horario", $horario);
        $stmt->bindValue(":cliente", $cliente);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirSessao($id){
    try{ 
        $sql = "DELETE FROM sessao WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}
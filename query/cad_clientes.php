<?php
session_start();
include_once "../config/conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$sql = $conn->prepare("insert into clientes_unimar(nome, cpf, email, tel, cep, rua, numero, comp, bairro, cidade, uf, data_cad) values(:nome, :cpf, :email, :tel, :cep, :rua, :numero, :comp, :bairro, :cidade, :uf, NOW())");
$sql->execute(array(
':nome'   => $dados['nome'],
':cpf'    => $dados['cpf'],
':email'  => $dados['email'],
':tel'    => $dados['tel'],
':cep'    => $dados['cep'],
':rua'    => $dados['rua'],
':numero' => $dados['numero'],
':comp'   => $dados['comp'],
':bairro' => $dados['bairro'],
':cidade' => $dados['cidade'],
':uf'     => $dados['uf'],

));

$_SESSION['msg'] = "<div class='alert alert-success text-center mb-3 fw-bold'>CLIENTE CADASTRADO COM SUCESSO!</div>";
header("Location: ../cadastrar-clientes.php");

$conn = null;
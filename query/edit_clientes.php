<?php
session_start();
include_once "../config/conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//$id = base64_decode(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT));
$id = base64_decode($dados['id']);
//var_dump($id);
//exit;

$hoje = date('Y-m-d H:i:s');

$sql = $conn->prepare("update clientes_unimar set nome=:nome, cpf=:cpf, email=:email, tel=:tel, cep=:cep, rua=:rua, numero=:numero, comp=:comp, bairro=:bairro, cidade=:cidade, uf=:uf, data_mod=:dt where id=:id");
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
':dt'     => $hoje,
':id'     => $id

));

$_SESSION['msg'] = "<div class='alert alert-success text-center mb-3 fw-bold'>CLIENTE ALTERADO COM SUCESSO!</div>";
header("Location: ../listar-clientes.php");

$conn = null;
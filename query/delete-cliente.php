<?php
session_start();
include_once "../config/conexao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = $conn->prepare("delete from clientes_unimar where id=:id limit 1");

if($sql->execute(['id' => $id])):
        $_SESSION['msg'] = "<div class='alert alert-danger text-center mb-3 fw-bold'>CLIENTE DELETADO DO SISTEMA!</div>";
        header("Location: ../listar-clientes.php");
    else:
        $_SESSION['msg'] = "<div class='alert alert-warning text-center mb-3 fw-bold'>HOUVE UM ERRO VERIFIQUE COM O ADMINISTRADOR DO SISTEMA!</div>";
        header("Location: ../listar-clientes.php");
endif;


$conn = null;
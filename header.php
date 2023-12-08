<?php 
session_start(); 
include_once "config/conexao.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unimar Clientes</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <?php require_once "assets/src/scripts-css.php"; ?>
  </head>
  <body>  
    
    <div class="content-fluid">
      <div class="mt-5">
          <?php
          if (isset($_SESSION['msg'])) :
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
          endif;
          ?>
      </div>
    </div>
    
    <div class="menu-2 d-flex flex-column align-items-center justify-content-center gap-3">

        <img src="assets/images/logo.png" alt="Unimar Clientes" width="150" class="mb-5 img-fluid">
        
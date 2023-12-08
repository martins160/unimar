<?php include_once "header.php"; ?>

<a href="index.php" class="btn-voltar"><i class="fa-solid fa-angle-left"></i> Voltar</a>

    <div class="container-fluid">
        <div class="table-responsive">
          <table class="table table-bordered align-middle" style="border: #F7F7F7;">

              <thead class="table-dark">
                  <tr>
                      <th>COD</th>
                      <th>CPF</th>
                      <th>NOME</th>                               
                      <th>DATA</th>                      
                      <th></th>
                  </tr>                  
              </thead>

              <tbody style="background: #fff;">

                  <?php
                  $stmt = $conn->prepare("select * from clientes_unimar order by id asc");
                  $stmt->execute();
                  $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);                       

                  if (empty($cliente)) { ?>
                  <div class="alert alert-primary text-center" role="alert">
                      <b>Ainda não consta clientes cadastrados no sistema!</b>
                  </div>
                  <?php } ?>

                  <?php

                  foreach ($cliente as $clientes) {
                      $id       = $clientes['id'];
                      $cpf      = $clientes['cpf'];
                      $nome     = $clientes['nome'];                          
                      $uf       = $clientes['uf'];                          
                      $data_cad = date("d/m/Y", strtotime($clientes['data_cad']));
                  ?>

                  <tr>
                      <td><?= $id ?></td>
                      <td><?= $cpf ?></td>
                      <td><?= $nome ?></td>                           
                      <td><?= $data_cad ?></td>                 

                      <td>
                          <a href="editar-clientes.php?id=<?= $id ?>&uf=<?= $uf ?>" class="btn btn-primary btn-sm"
                              style="margin-right:5px"><i class="fa-solid fa-user-pen"></i></a>
                          <a href="query/delete-cliente.php?id=<?= $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir esse cliente?');"><i class="fa-solid fa-trash-can"></i></a>                         
                      </td>
                  </tr>                       

                  <?php } ?>

              </tbody>

          </table>
        </div>
    </div>

<?php include_once "footer.php"; ?>
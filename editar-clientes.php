<?php include_once "header.php"; ?>

<a href="listar-clientes.php" class="btn-voltar"><i class="fa-solid fa-angle-left"></i> Voltar</a>

<div class="container-fluid">

    <form method="post" action="query/edit_clientes.php" class="mt-1">

    <?php
        $id = $_GET['id'];
        $sql = $conn->prepare("select * from clientes_unimar where id=:id");
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($dados);

        foreach ($dados as $d => $value) :
            $nome     = $value['nome'];
            $cpf      = $value['cpf'];
            $email    = $value['email'];
            $tel      = $value['tel'];
            $cep      = $value['cep'];
            $rua      = $value['rua'];
            $numero   = $value['numero'];
            $comp     = $value['comp'];
            $bairro   = $value['bairro'];
            $cidade   = $value['cidade'];
            $uf       = $value['uf'];
            $data_cad = date("d/m/Y", strtotime($value['data_cad']));
            $id       = $value['id'];
        endforeach;
    ?>


        <div class="row">
            <div class="col-md-8">
                <input id="nome" maxlength="100" value="<?= $nome ?>" type="text" name="nome" class="form-control form-control-lg form-input" placeholder="Nome do cliente" autofocus required> 
            </div>
            <div class="col-md-4 row-input2"> 
                <input id="cpf" value="<?= $cpf ?>" type="text" name="cpf" class="form-control form-control-lg form-input cpf" placeholder="CPF" required maxlength="14">
            </div>
        </div>
        <div class="row row-input">
            <div class="col-md-7">
                <input id="email" maxlength="150" value="<?= $email ?>" type="email" name="email" class="form-control form-control-lg form-input" placeholder="Email" required> 
            </div>
            <div class="col-md-5 row-input2"> 
                <input id="tel" value="<?= $tel ?>" type="text" name="tel" class="form-control form-control-lg form-input tel" placeholder="Telefone" required maxlength="15">
            </div>
        </div>
        <div class="row row-input">
            <div class="col-md-4">
                <input id="cep" maxlength="9" value="<?= $cep ?>" type="text" name="cep" class="form-control form-control-lg form-input cep" placeholder="CEP" required> 
            </div>
            <div class="col-md-8 row-input2"> 
                <input readonly id="rua" value="<?= $rua ?>" type="text" name="rua" class="form-control form-control-lg form-input" placeholder="Endereço" required maxlength="100">
            </div>
        </div>

        <div class="row row-input">
            <div class="col-md-2">
                <input id="numero" value="<?= $numero ?>" type="text" name="numero" class="form-control form-control-lg form-input" placeholder="N°"  maxlength="100">
            </div>
            <div class="col-md-4 row-input2">
                <input id="comp" value="<?= $comp ?>" type="text" name="comp" class="form-control form-control-lg form-input" placeholder="Complemento"  maxlength="100">
            </div>
            <div class="col-md-6 row-input2">
                <input readonly id="bairro"  value="<?= $bairro ?>" type="text" name="bairro" class="form-control form-control-lg form-input" placeholder="Bairro" required maxlength="50"> 
            </div>
        </div>

        <div class="row row-input">
            <div class="col-md-8">
                <input readonly id="cidade" type="text" value="<?= $cidade ?>" name="cidade" class="form-control form-control-lg form-input" placeholder="Cidade" required maxlength="50"> 
            </div>

            <?php 

            $options = array(
                1 => '<option value="AC">Acre</option>',
                2 => '<option value="AL">Alagoas</option>',
                3 => '<option value="AP">Amapá</option>',
                4 => '<option value="AM">Amazonas</option>',
                5 => '<option value="BA">Bahia</option>',
                6 => '<option value="CE">Ceará</option>',
                7 => '<option value="DF">Distrito Federa</option>',
                8 => '<option value="ES">Espírito Santo</option>',
                9 => '<option value="GO">Goiás</option>',
                10 => '<option value="MA">Maranhão</option>',
                11 => '<option value="MT">Mato Grosso</option>',
                12 => '<option value="MS">Mato Grosso do Sul</option>',
                13 => '<option value="MG">Minas Gerais</option>',
                14 => '<option value="PA">Pará</option>',
                15 => '<option value="PB">Paraíba</option>',
                16 => '<option value="PR">Paraná</option>',
                17 => '<option value="PE">Pernambuco</option>',
                18 => '<option value="PI">Piauí</option>',
                19 => '<option value="RJ">Rio de Janeiro</option>',
                20 => '<option value="RN">Rio Grande do Norte</option>',
                21 => '<option value="RS">Rio Grande do Sul</option>',
                22 => '<option value="RO">Rondônia</option>',
                23 => '<option value="RR">Roraima</option>',
                24 => '<option value="SC">Santa Catarina</option>',
                25 => '<option value="SP">São Paulo</option>',
                26 => '<option value="SE">Sergipe</option>',
                27 => '<option value="TO">Tocantins</option>',
            );

            ?>


            <div class="col-md-4 row-input2">
                <select readonly name="uf" id="uf" class="form-control form-control-lg form-input">
                    <option value="AC" <?php if ($_GET['uf'] == 'AC') { echo ' selected="selected"'; } ?>>AC</option>
                    <option value="AL" <?php if ($_GET['uf'] == 'AL') { echo ' selected="selected"'; } ?>>AL</option>
                    <option value="AP" <?php if ($_GET['uf'] == 'AP') { echo ' selected="selected"'; } ?>>AP</option>
                    <option value="AM" <?php if ($_GET['uf'] == 'AM') { echo ' selected="selected"'; } ?>>AM</option>
                    <option value="BA" <?php if ($_GET['uf'] == 'BA') { echo ' selected="selected"'; } ?>>BA</option>
                    <option value="CE" <?php if ($_GET['uf'] == 'CE') { echo ' selected="selected"'; } ?>>CE</option>
                    <option value="DF" <?php if ($_GET['uf'] == 'DF') { echo ' selected="selected"'; } ?>>DF</option>
                    <option value="ES" <?php if ($_GET['uf'] == 'ES') { echo ' selected="selected"'; } ?>>ES</option>
                    <option value="GO" <?php if ($_GET['uf'] == 'GO') { echo ' selected="selected"'; } ?>>GO</option>
                    <option value="MA" <?php if ($_GET['uf'] == 'MA') { echo ' selected="selected"'; } ?>>MA</option>
                    <option value="MT" <?php if ($_GET['uf'] == 'MT') { echo ' selected="selected"'; } ?>>MT</option>
                    <option value="MS" <?php if ($_GET['uf'] == 'MS') { echo ' selected="selected"'; } ?>>MS</option>
                    <option value="MG" <?php if ($_GET['uf'] == 'MG') { echo ' selected="selected"'; } ?>>MG</option>
                    <option value="PA" <?php if ($_GET['uf'] == 'PA') { echo ' selected="selected"'; } ?>>PA</option>
                    <option value="PB" <?php if ($_GET['uf'] == 'PB') { echo ' selected="selected"'; } ?>>PB</option>
                    <option value="PR" <?php if ($_GET['uf'] == 'PR') { echo ' selected="selected"'; } ?>>PR</option>
                    <option value="PE" <?php if ($_GET['uf'] == 'PE') { echo ' selected="selected"'; } ?>>PE</option>
                    <option value="PI" <?php if ($_GET['uf'] == 'PI') { echo ' selected="selected"'; } ?>>PI</option>
                    <option value="RJ" <?php if ($_GET['uf'] == 'RJ') { echo ' selected="selected"'; } ?>>RJ</option>
                    <option value="RN" <?php if ($_GET['uf'] == 'RN') { echo ' selected="selected"'; } ?>>RN</option>
                    <option value="RS" <?php if ($_GET['uf'] == 'RS') { echo ' selected="selected"'; } ?>>RS</option>
                    <option value="RO" <?php if ($_GET['uf'] == 'RO') { echo ' selected="selected"'; } ?>>RO</option>
                    <option value="RR" <?php if ($_GET['uf'] == 'RR') { echo ' selected="selected"'; } ?>>RR</option>
                    <option value="SC" <?php if ($_GET['uf'] == 'SC') { echo ' selected="selected"'; } ?>>SC</option>
                    <option value="SP" <?php if ($_GET['uf'] == 'SP') { echo ' selected="selected"'; } ?>>SP</option>
                    <option value="SE" <?php if ($_GET['uf'] == 'SE') { echo ' selected="selected"'; } ?>>SE</option>
                    <option value="TO" <?php if ($_GET['uf'] == 'TO') { echo ' selected="selected"'; } ?>>TO</option>              
                </select>
            </div>

        </div>
        <div class="d-grid mt-3">
        <input readonly id="id" type="hidden" value="<?= base64_encode($id) ?>" name="id" required>
            <button type="submit" class="btn btn-lg btn-success btn-cad"><i class="fa-regular fa-circle-check"></i> Atualizar</button>
        </div>                
        
    </form>
</div>

<?php include_once "footer.php"; ?>
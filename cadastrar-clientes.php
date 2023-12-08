<?php include_once "header.php"; ?>

<a href="index.php" class="btn-voltar"><i class="fa-solid fa-angle-left"></i> Voltar</a>

<div class="container-fluid">

    <form method="post" action="query/cad_clientes.php" class="mt-1">

        <div class="row">
            <div class="col-md-8">
                <input id="nome" maxlength="100" value="" type="text" name="nome" class="form-control form-control-lg form-input" placeholder="Nome do cliente" autofocus required> 
            </div>
            <div class="col-md-4 row-input2"> 
                <input id="cpf" value="" type="text" name="cpf" class="form-control form-control-lg form-input cpf" placeholder="CPF" required maxlength="14">
            </div>
        </div>
        <div class="row row-input">
            <div class="col-md-7">
                <input id="email" maxlength="150" value="" type="email" name="email" class="form-control form-control-lg form-input" placeholder="Email" required> 
            </div>
            <div class="col-md-5 row-input2"> 
                <input id="tel" value="" type="text" name="tel" class="form-control form-control-lg form-input tel" placeholder="Telefone" required maxlength="15">
            </div>
        </div>
        <div class="row row-input">
            <div class="col-md-4">
                <input id="cep" maxlength="9" value="" type="text" name="cep" class="form-control form-control-lg form-input cep" placeholder="CEP" required> 
            </div>
            <div class="col-md-8 row-input2"> 
                <input readonly id="rua" value="" type="text" name="rua" class="form-control form-control-lg form-input" placeholder="Endereço" required maxlength="100">
            </div>
        </div>

        <div class="row row-input">
            <div class="col-md-2">
                <input id="numero" value="" type="text" name="numero" class="form-control form-control-lg form-input" placeholder="N°"  maxlength="100">
            </div>
            <div class="col-md-4 row-input2">
                <input id="comp" value="" type="text" name="comp" class="form-control form-control-lg form-input" placeholder="Complemento"  maxlength="100">
            </div>
            <div class="col-md-6 row-input2">
                <input readonly id="bairro"  value="" type="text" name="bairro" class="form-control form-control-lg form-input" placeholder="Bairro" required maxlength="50"> 
            </div>
        </div>

        <div class="row row-input">
            <div class="col-md-8">
                <input readonly id="cidade" type="text" value="" name="cidade" class="form-control form-control-lg form-input" placeholder="Cidade" required maxlength="50"> 
            </div>
            <div class="col-md-4 row-input2">
                <select readonly name="uf" id="uf" class="form-control form-control-lg form-input">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federa</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select> 
            </div>
        </div>
        <div class="d-grid mt-3">
            <button type="submit" class="btn btn-lg btn-success btn-cad"><i class="fa-regular fa-circle-check"></i> Cadastrar</button>
        </div>                
        
    </form>
</div>

<?php include_once "footer.php"; ?>
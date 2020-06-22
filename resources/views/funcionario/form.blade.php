@csrf            
<div class="row">
    <div class="form-group col-md-5 ">
    <label for="codFunc">Código</label>
            <input type="text" class="form-control" id="codFunc" disabled="">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12 ">
    <label for="nomeFunc">Nome</label>
    <input type="text" name="nome" class="form-control" id="nomeFunc" required>
    </div> 
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="rgFunc">RG</label>
        <input type="text" name="rg" class="form-control" data-mask="00.000.000-0" maxlength="13" autocomplete="off" id="rgFunc" placeholder="Ex.: 00.000.000-0" required>
    </div>
    <div class="form-group col-md-6">
        <label for="cpfFunc">CPF</label>
        <input type="text" name="cpf" class="form-control cpf-mask" id="cpfFunc" placeholder="Ex.: 000.000.000-00" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="emailFunc">E-mail</label>
        <input type="email" name="email" class="form-control" id="emailFunc" placeholder="Ex.: email@exemplo.com.br" required>
    </div>
    <div class="form-group col-md-6">
        <label for="telFunc">Telefone</label>
        <input type="text" name="telefone" class="form-control phone-ddd-mask" id="telFunc" placeholder="Ex.: (00) 0000-0000" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        <label for="endFunc">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="endFunc" placeholder="Rua ou avenida, Número - Cidade - Estado" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="carFunc">Cargo</label>
        <input type="text" name="cargo" class="form-control" id="carFunc" placeholder="Ex.: Secretária" required>
    </div>
    <div class="form-group col-md-6">
        <label for="salFunc">Salário</label>
        <input type="text" name="salario" class="form-control" data-mask="#.##0,00" id="salFunc" placeholder="R$" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="dataAdmFunc">Data de Admissão</label>
        <input type="date" name="dt_admimissao"class="form-control" id="dataAdmFunc" required>
    </div>
    <div class="form-group col-md-6">
        <label for="dataDemFunc">Data de Demissão</label>
        <input type="date" name="dt_demissao" class="form-control" id="dataDemFunc">
    </div>
</div>
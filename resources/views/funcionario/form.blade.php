@csrf       
<div class="row">
    <div class="form-group col-md-5">
    <label for="codFunc">Código</label>
            <input type="text" name="id" class="form-control" id="codFunc" value="{{ $funcionario->id }}" readonly="readonly">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12 ">
        <label for="nomeFunc">Nome</label>
        <input type="text" name="nome" value="{{ $funcionario->nome }}" class="form-control" id="nomeFunc" required>
    </div> 
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="rgFunc">RG</label>
        <input type="text" name="rg" value="{{ $funcionario->rg}}" class="form-control" data-mask="00.000.000-0" maxlength="13" autocomplete="off" id="rgFunc" placeholder="Ex.: 00.000.000-0" required>
    </div>
    <div class="form-group col-md-6">
        <label for="cpfFunc">CPF</label>
        <input type="text" name="cpf" value="{{ $funcionario->cpf}}" class="form-control cpf-mask" id="cpfFunc" placeholder="Ex.: 000.000.000-00" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="emailFunc">E-mail</label>
        <input type="email" name="email" value="{{ $funcionario->email }}" class="form-control" id="emailFunc" placeholder="Ex.: email@exemplo.com.br" required>
    </div>
    <div class="form-group col-md-6">
        <label for="telFunc">Telefone</label>
        <input type="text" name="telefone" value="{{ $funcionario->telefone }}" class="form-control phone-ddd-mask" id="telFunc" placeholder="Ex.: (00) 0000-0000" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        <label for="endFunc">Endereço</label>
        <input type="text" name="endereco" class="form-control" value="{{ $funcionario->endereco }}" id="endFunc" placeholder="Rua ou avenida, Número - Cidade - Estado" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="carFunc">Cargo</label>
        <input type="text" name="cargo" value="{{ $funcionario->cargo }}" class="form-control" id="carFunc" placeholder="Ex.: Secretária" required>
    </div>
    <div class="form-group col-md-6">
        <label for="salFunc">Salário</label>
        <input type="text" name="salario" value="{{ $funcionario->salario }}" class="form-control" maxlength="8" onKeyPress="return(formataMoeda(this,'.',',',event))" id="salFunc" placeholder="R$" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="dataAdmFunc">Data de Admissão</label>
        <input type="text" name="dt_adimissao" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" value="{{ ($funcionario->dt_adimissao) ? $funcionario->dt_adimissao->format('d/m/Y') : $funcionario->dt_adimissao }}" class="form-control date-mask" id="dataAdmFunc" required>
    </div>
    @if($funcionario->dt_adimissao)
        <div class="form-group col-md-6">
            <label for="dataDemFunc">Data de Demissão</label>
            <input type="text" name="dt_demissao" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" value="{{ ($funcionario->dt_demissao) ? $funcionario->dt_demissao->format('d/m/Y') : $funcionario->dt_demissao  }}" class="form-control date-mask" id="dataDemFunc">
        </div>
    @endif
</div>

<script language="javascript">  
    function formataMoeda(el, SeparadorMilesimo, SeparadorDecimal, e) {
        const objTextBox = el;
        const maxLen = objTextBox.getAttribute('maxlength');
        let len = objTextBox.value.length;
        let key = '';
        let i = 0;
        const strCheck = '0123456789';
        let aux = '';
        const whichCode = (window.addEventListener) ? e.which : e.keyCode;
        // 13=enter, 8=backspace as demais retornam 0(zero)
        // whichCode==0 faz com que seja possivel usar todas as teclas como delete, setas, etc
        if ((whichCode === 13) || (whichCode === 0) || (whichCode === 8)) {
            return true;
        }
        key = String.fromCharCode(whichCode); // Valor para o código da Chave


        if (strCheck.indexOf(key) === -1) {
            return false;
        } // Chave inválida

        if (len >= maxLen) {
            return false;
        }

        for (i = 0; i < len; i += 1) {
            if ((objTextBox.value.charAt(i) !== '0') && (objTextBox.value.charAt(i) !== SeparadorDecimal)) {
                break;
            }
        }
        for (; i < len; i += 1) {
            if (strCheck.indexOf(objTextBox.value.charAt(i)) !== -1) {
                aux += objTextBox.value.charAt(i);
            }
        }
        aux += key;
        len = aux.length;
        if (len === 0) {
            objTextBox.value = '';
        }
        if (len === 1) {
            objTextBox.value = `0${SeparadorDecimal}0${aux}`;
        }
        if (len === 2) {
            objTextBox.value = `0${SeparadorDecimal}${aux}`;
        }
        if (len > 2) {
            let aux2 = '';
            let len2 = 0;
            let j = 0;
            for (j = 0, i = len - 3; i >= 0; i -= 1) {
                if (j === 3) {
                    aux2 += SeparadorMilesimo;
                    j = 0;
                }
                aux2 += aux.charAt(i);
                j += 1;
            }
            objTextBox.value = '';
            len2 = aux2.length;
            for (i = len2 - 1; i >= 0; i -= 1) {
                objTextBox.value += aux2.charAt(i);
            }
            objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
        }
        return false;
    }
    const elem = document.getElementById('money-mask');
 </script>  

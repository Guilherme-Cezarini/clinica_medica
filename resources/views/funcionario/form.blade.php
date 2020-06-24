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
        <input type="text" name="salario" value="{{ $funcionario->salario }}" class="form-control" onKeyPress="return(moeda(this,'.',',',event))" id="salFunc" placeholder="R$" required>
    </div>
</div>
<!--data-mask="#.##0,00" -->
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
    function moeda(a, e, r, t) {
        let n = ""
        , h = j = 0
        , u = tamanho2 = 0
        , l = ajd2 = ""
        , o = window.Event ? t.which : t.keyCode;
        if (13 == o || 8 == o)
            return !0;
        if (n = String.fromCharCode(o),
        -1 == "0123456789".indexOf(n))
            return !1;
        for (u = a.value.length,
        h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
            ;
        for (l = ""; h < u; h++)
            -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
        if (l += n,
        0 == (u = l.length) && (a.value = ""),
        1 == u && (a.value = "0" + r + "0" + l),
        2 == u && (a.value = "0" + r + l),
        u > 2) {
            for (ajd2 = "",
            j = 0,
            h = u - 3; h >= 0; h--)
                3 == j && (ajd2 += e,
                j = 0),
                ajd2 += l.charAt(h),
                j++;
            for (a.value = "",
            tamanho2 = ajd2.length,
            h = tamanho2 - 1; h >= 0; h--)
                a.value += ajd2.charAt(h);
            a.value += r + l.substr(u - 2, u)
        }
        return !1
    }
 </script>  

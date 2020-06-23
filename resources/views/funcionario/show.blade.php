@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="#" id="form1" name="form1" class="container">
            <h3 class="page-header">Visualizar Funcionário</h3>
            <hr>

            @csrf       
            <div class="row">
                <div class="form-group col-md-5 ">
                <label for="codFunc">Código</label>
                        <input type="text" name="id" class="form-control" id="codFunc" value="{{ $funcionario->id }}" readonly="readonly">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12 ">
                <label for="nomeFunc">Nome</label>
                <input type="text" name="nome" value="{{ $funcionario->nome }}" class="form-control" id="nomeFunc" readonly="readonly">
                </div> 
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rgFunc">RG</label>
                    <input type="text" name="rg" value="{{ $funcionario->rg}}" class="form-control" data-mask="00.000.000-0" maxlength="13" autocomplete="off" id="rgFunc" placeholder="Ex.: 00.000.000-0" readonly="readonly">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpfFunc">CPF</label>
                    <input type="text" name="cpf" value="{{ $funcionario->cpf}}" class="form-control cpf-mask" id="cpfFunc" placeholder="Ex.: 000.000.000-00" readonly="readonly">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="emailFunc">E-mail</label>
                    <input type="email" name="email" value="{{ $funcionario->email }}" class="form-control" id="emailFunc" placeholder="Ex.: email@exemplo.com.br" readonly="readonly">
                </div>
                <div class="form-group col-md-6">
                    <label for="telFunc">Telefone</label>
                    <input type="text" name="telefone" value="{{ $funcionario->telefone }}" class="form-control phone-ddd-mask" id="telFunc" placeholder="Ex.: (00) 0000-0000" readonly="readonly">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="endFunc">Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $funcionario->endereco }}" id="endFunc" placeholder="Rua ou avenida, Número - Cidade - Estado" readonly="readonly">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="carFunc">Cargo</label>
                    <input type="text" name="cargo" value="{{ $funcionario->cargo }}" class="form-control" id="carFunc" placeholder="Ex.: Secretária" readonly="readonly">
                </div>
                <div class="form-group col-md-6">
                    <label for="salFunc">Salário</label>
                    <input type="text" name="salario" value="{{ $funcionario->salario }}" class="form-control" data-mask="#.##0,00" id="salFunc" placeholder="R$" readonly="readonly">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="dataAdmFunc">Data de Admissão</label>
                    <input type="text" name="dt_adimissao" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" value="{{ ($funcionario->dt_adimissao) ? $funcionario->dt_adimissao->format('d/m/Y') : $funcionario->dt_adimissao }}" class="form-control date-mask" id="dataAdmFunc" readonly="readonly">
                </div>
                @if($funcionario->dt_adimissao)
                    <div class="form-group col-md-6">
                        <label for="dataDemFunc">Data de Demissão</label>
                        <input type="text" name="dt_demissao" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" value="{{ ($funcionario->dt_demissao) ? $funcionario->dt_demissao->format('d/m/Y') : $funcionario->dt_demissao  }}" class="form-control date-mask" id="dataDemFunc" readonly="readonly">
                    </div>
                @endif
            </div>
        
            <hr>
        
            <div id="actions" class="row">
            <div class="col-md-12" align ="right">
                <a href="/funcionarios" class="btn btn-primary">Voltar</a>
            </div>
            </div>
        </form>
        <!-- Final Formulário -->
        
    </body>

@include('includes.footer')


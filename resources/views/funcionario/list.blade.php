@if(!$funcionarios->isEmpty())

    <!-- Listagem Começo-->
    <div id="list" class="row">
        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>Funcionários</th>
                        <th class="inativar">Inativar</th>
                        <th class="alterar">Alterar</th>
                        <th class="excluir">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($funcionarios as $key => $funcionario)
                        <tr>
                            <td><a href="/funcionarios/visualizar/{{$funcionario->id}}">{{ $funcionario->nome }} </a></td> 

                            @if($funcionario->activate)
                                <td class="inativar" align="center" style="width:100px"><a href="/funcionarios/inativar/{{$funcionario->id}}"><img src="<?php echo asset('img/botoes/inativar.png'); ?>"></a></td>
                            @else
                                <td class="ativar" align="center" style="width:100px"></td>

                            @endif
                            <td  class="alterar" align="center" style="width:100px"><a href="/funcionarios/alterar/{{$funcionario->id}}"><img src="<?php echo asset('img/botoes/alterar.png') ?>"></a></td>

                            <td class="excluir" align="center" style="width:100px"><a href="/funcionarios/deletar/{{$funcionario->id}}"><img src="<?php echo asset('img/botoes/excluir.png') ?>"></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--Listagem Final-->

    <div id="actions" class="row">
        <div class="col-md-12" align ="right">
            <a href="#" class="btn btn-primary">Voltar</a>
        </div>
    </div>
@else
    <div class="alert1 alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-hidden="true">×</a>
        <p class="erro"><strong>Não há funcionários cadastrados com esse nome.</strong></p>
    </div>
@endif

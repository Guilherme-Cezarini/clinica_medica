@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="#" class="container">
            <h3 class="page-header">Lista de funcionários</h3>
            <hr>

            <!-- Buscar Funcionário-->
            <div class="form-row row">
                <label for="buscarFunc">Buscar por:</label>
                <div class="value col-md-7">
                    <input type="text" class="form-control" id="buscarFunc">
                </div>
                <div class="col-xl-1" align= "right">
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            </div>

            @if(!$funcionarios->isEmpty())
                <!-- Listagem Começo-->
                <div id="list" class="row">
                    <div class="table-responsive col-md-12">
                        <table class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th >Funcionários</th>
                                    <th class="inativar">Inativar</th>
                                    <th class="alterar">Alterar</th>
                                    <th class="excluir">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($funcionarios as $key => $funcionario)
                                    <tr>
                                        <!--EDITAR!!!-->
                                        <div>
                                            <td><input type="checkbox" name="#" value="#"></td>
                                            <td>{{ $funcionario->nome }}</td>
                                        </div>  
                                        <!--!!!!!!!!--> 

                                        <td class="inativar" align="center" style="width:100px"><a href="/funcionarios/inativar/{{$funcionario->id}}"><img src="img/botoes/inativar.png"></a></td>

                                        <td  class="alterar" align="center" style="width:100px"><a href="/funcionarios/alterar/{{$funcionario->id}}"><img src="img/botoes/alterar.png"></a></td>

                                        <td class="excluir" align="center" style="width:100px"><a href="#"><img src="img/botoes/excluir.png"></a></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Listagem Final-->
            
                <div id="actions" class="row">
                    <div class="col-md-12" align ="right">
                        <button type="submit" class="btn btn-primary">Visualizar</button>
                        <a href="#" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </form>
            <!-- Final Formulário-->
        @else
            <!--<div id="list">
                <p class="erro"> Não há funcionários cadastrados. </p>    
            </div>-->
            <div class="alert alert-danger alert-dismissable">
	            <a href="#" class="close" data-dismiss="alert" aria-hidden="true">×</a>
	            <p class="erro"><strong>Não há funcionários cadastrados com esse nome.</strong></p>
                </div>
        @endif
    </body>
@include('includes.footer')

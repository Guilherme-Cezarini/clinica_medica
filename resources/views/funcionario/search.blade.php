@include('includes.header')
    <body>
        <div class="container">
            <h3 class="page-header">Pesquisa de funcionários</h3>
            <hr>

            <!-- Buscar Funcionário-->
            <form action="/funcionarios/pesquisar" method="POST">
                @csrf
                <div class="form-row row">
                    <label for="buscarFunc">Buscar por:</label>
                    <div class="value col-md-6">
                        <input type="text" class="form-control" name="nome" id="buscarFunc">
                    </div>
                    <div class="col-xl-1 col-md-3" align= "right">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </div>
                    <div class="col-md-3">
                        <a href="/funcionarios/cadastrar" class="btn btn-primary" style="margin: 0 220px">Cadastrar</a>
                    </div>
                </div>
            </form>

        @include('funcionario.list')
        <div>
    </body>
@include('includes.footer')

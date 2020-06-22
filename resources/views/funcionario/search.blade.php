@include('includes.header')
    <body class="container">
        <h3 class="page-header">Pesquisa de funcionários</h3>
        <hr>

        <!-- Buscar Funcionário-->
        <form action="/funcionarios/pesquisar" method="POST">
            @csrf
            <div class="form-row row">
                <label for="buscarFunc">Buscar por:</label>
                <div class="value col-md-7">
                    <input type="text" class="form-control" name="nome" id="buscarFunc">
                </div>
                <div class="col-xl-1" align= "right">
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            </div>
        </form>

        @include('funcionario.list')

    </body>
@include('includes.footer')

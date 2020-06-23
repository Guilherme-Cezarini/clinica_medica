@include('includes.header')
    <body>

        <!-- Começo Formulário -->
        <form action="/funcionarios/salvar" class="container" method="POST">
            <h3 class="page-header">Cadastrar Funcionário</h3>
            <hr>

            @include('funcionario.form')

            <hr>
            <div id="actions" class="row">
                <div class="col-md-12" align ="right">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="/funcionarios" class="btn btn-primary">Cancelar</a>
                </div>
            </div>
        </form>
        <!-- Final Formulário-->

    </body>
@include('includes.footer')

@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="/funcionarios/atualizar" class="container" method="POST">
            <h3 class="page-header">Alterar Funcionário</h3>
            <hr>
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissable" id="notif">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">×</a>
                    <p class="erro"><strong> {{Session::get('message')}} </strong></p>
                </div>
            @endif

            @include('funcionario.form')

        
            <hr>
        
            <div id="actions" class="row">
            <div class="col-md-12" align ="right">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/funcionarios" class="btn btn-primary">Cancelar</a>
            </div>
            </div>
        </form>
        <!-- Final Formulário -->
        
    </body>
@include('includes.footer')

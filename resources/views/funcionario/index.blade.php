@include('includes.header')
    <body>
        <div class="container">
            <h3 class="page-header">Lista de funcionários</h3>
            <hr>
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissable" id="notif">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">×</a>
                    <p class="erro"><strong> {{Session::get('message')}} </strong></p>
                </div>
            @endif
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
            
            <!-- Notificação -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $().ready(function() {
                    setTimeout(function () {
                        $('#notif').hide();
                    }, 3000);
                });
            </script>

            @include('funcionario.list')
        
        </div>
    </body>
@include('includes.footer')

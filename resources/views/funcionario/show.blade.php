@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="#" id="form1" name="form1" class="container">
            <h3 class="page-header">Visualizar Funcionário</h3>
            <hr>
            @include('funcionario.form')
        
            <hr>
        
            <div id="actions" class="row">
            <div class="col-md-12" align ="right">
                <a href="/funcionarios" class="btn btn-primary">Voltar</a>
            </div>
            </div>
        </form>
        <!-- Final Formulário -->
        <!-- Pegar data -->
        @section('scripts')
            <script>
                $('#dataAdmFunc').datepicker({
                    iconsLibrary: 'fontawesome',
                    icons: {
                        rightIcon: '<span class="fa fa-caret-down"></span>'
                    }
                });
                $('#dataDemFunc').datepicker({
                    iconsLibrary: 'fontawesome',
                    icons: {
                        rightIcon: '<span class="fa fa-caret-down"></span>'
                    }
                });
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
        </script>
       @stop
        
    </body>

@include('includes.footer')


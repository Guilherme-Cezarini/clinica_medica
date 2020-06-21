@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="/funcionarios/salvar" class="container">
            <h3 class="page-header">Alterar Funcionário</h3>
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
        <!-- Final Formulário -->
        <!-- Pegar data -->
        <script src="js/main.js"></script>
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
        
    </body>
@include('includes.footer')

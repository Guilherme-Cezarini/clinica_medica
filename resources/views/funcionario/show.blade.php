@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="#" class="container" readonly>
            <h3 class="page-header">Visualizar Funcionário</h3>
            <hr>
            @include('funcionario.form')
        
            <hr>
        
            <div id="actions" class="row">
            <div class="col-md-12" align ="right">
                <a href="#" class="btn btn-primary">Voltar</a>
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


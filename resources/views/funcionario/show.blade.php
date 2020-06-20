@include('includes.header')
    <body>
        <!--Começo Formulário-->
        <form action="#" class="container">
            <h3 class="page-header">Visualizar Funcionário</h3>
            <hr>
            <div class="row">
                <div class="form-group col-md-5 ">
                <label for="codFunc">Código</label>
                    <input type="text" class="form-control" id="codFunc" disabled="">
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-md-12 ">
                <label for="nomeFunc">Nome</label>
                <input type="text" class="form-control" id="nomeFunc" required>
                </div> 
            </div>
        
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rgFunc">RG</label>
                    <input type="text" class="form-control" id="rgFunc" placeholder="Ex.: 00.000.000-0" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpfFunc">CPF</label>
                    <input type="text" class="form-control cpf_mask" id="cpfFunc" placeholder="Ex.: 000.000.000-00" required>
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="emailFunc">E-mail</label>
                    <input type="email" class="form-control" id="emailFunc" placeholder="Ex.: email@exemplo.com.br" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="telFunc">Telefone</label>
                    <input type="text" class="form-control phone-ddd-mask" id="telFunc" placeholder="Ex.: (00) 0000-0000" required>
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="endFunc">Endereço</label>
                    <input type="text" class="form-control" id="endFunc" placeholder="Rua ou avenida, Número - Cidade - Estado" required>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="carFunc">Cargo</label>
                    <input type="text" class="form-control" id="carFunc" placeholder="Secretária" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="salFunc">Salário</label>
                    <input type="text" class="form-control" id="salFunc" placeholder="R$" required>
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="dataAdmFunc">Data de Admissão</label>
                    <input type="date" class="form-control" id="dataAdmFunc" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dataDemFunc">Data de Demissão</label>
                    <input type="date" class="form-control" id="dataDemFunc" required>
                </div>
            </div>
        
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


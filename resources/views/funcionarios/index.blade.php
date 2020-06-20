<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Clínica Médica - RH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ícone -->
        <link rel="shortcut icon" type="image/x-icon" href="img/icone.ico">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

        <!-- Começo Header -->
        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container2 ">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="align-items-center">
                                    <li> Usuário: Maria da Dores</li>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#">Médico <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Cadastrar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Convênio <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Cadastrar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Especialidade <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Cadastrar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Funcionário <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Cadastrar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Usuário <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Cadastrar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a class="popup-with-form" href="#">Sair</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Final Header -->


        <!--Começo Formulário-->
        <form action="#" class="container">
            <h3 class="page-header">Pesquisar Funcionário</h3>
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
                            <tr>
                                <!--EDITAR!!!-->
                                <div>
                                    <td><input type="checkbox" name="#" value="#"></td>
                                    <td>Nome Funcionário</td>
                                </div>  
                                <!--!!!!!!!!--> 

                                <td class="inativar" align="center" style="width:100px"><a href="#"><img src="img/botoes/inativar.png"></a></td>

                                <td  class="alterar" align="center" style="width:100px"><a href="#"><img src="img/botoes/alterar.png"></a></td>

                                <td class="excluir" align="center" style="width:100px"><a href="#"><img src="img/botoes/excluir.png"></a></td>

                            </tr>
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

        <!-- Footer-->
        <footer class="footer">
            <div class="copy-right_text"></div>
        </footer>


        <!-- JS -->
        <script src="js/script.js/vendor/modernizr-3.5.0.min.js" type="text/javascript"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>

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
    }       );
        </script>
        
    </body>
</html>
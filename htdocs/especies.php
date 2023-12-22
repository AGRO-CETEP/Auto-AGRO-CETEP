<!DOCTYPE html>
<?php
require 'php/class.php';
$cls = new database;
$link = $cls->GetLinkMySQLI();

$id = addslashes($_GET['id']);
$query = mysqli_query($link, "SELECT * FROM `SPECIE` WHERE `ID_SPECIE`='" . $id . "'");
$cont = mysqli_num_rows($query);


?>

<html lang="pt-br">

<head>

    <title>AGROCETEP - Espécie </title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <meta name="google-site-verification" content="3xdx50DorW0BgAza_PUsK2xVgQGUZegVIt7wxWjDDF0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="icon" href="/images/Logo AgroCETEP.png">

    <link rel="stylesheet" href="/style.css">

</head>

<body style="margin: 0px;padding: 0px;background-image: radial-gradient(white, #fcb900);">



    <section class="jumbotron container" style="border-radius: 10px; padding-block: 15px; margin-top: 10px;">

        <header class="container-fluid  bg-secondary text-white" style="

                                                                      background-color: black;

                                                                      color: white;

                                                                      border-radius: 15px;

                                                                      ">

            <div class="row">

                <div class="col-sm-3 text-center">

                    <a href="https://agrocetep.wordpress.com/">

                        <img src="/images/Logo AgroCETEP.png" class="img-rounded" alt=""
                            style="width: 50%; margin-block: 20%;"></a>

                </div>

                <div class="col-md-9 text-center">

                    <div style="margin-block: 10%;">

                        <a href="https://agrocetep.wordpress.com/" style="color: white">
                            <h2>AGROCETEP</h2>

                            <h4>Catálogo online</h4>
                        </a>

                    </div>

                </div>

            </div>

        </header>

        <ul class="nav nav-tabs">

            <li class=""><a href="/painel/">Área do usuário <span class="glyphicon glyphicon-user"></span></a></li>

            <li class=""><a data-toggle="" href="/">Todas as espécies <span class="glyphicon glyphicon-leaf"></span></a>
            </li>

            <!--        <li class="active"><a href="#home">Perfil <span class="glyphicon glyphicon-user"></span></a></li>        -->

            <li class=""><a data-toggle="" href="/medicinais.php" aria-expanded="false">Espécies medicinais <span
                        class="glyphicon glyphicon-plus"></span></a></li>


            <!--<li><a href="/painel/logout.php">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>-->

        </ul>



        <div class="tab-content jumbotron">

            <?php while ($rows = mysqli_fetch_array($query)) {            
                
            ?>



                <div class="row" style="display: flex;">

                    <div class="modal-dialog" style="width: 100%;">


                        <!-- Modal content-->

                        <div class="modal-content" style="width: 100%">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">×</button>

                                <h4 class="modal-title">Espécie: <i>
                                        <?= base64_decode($rows[6]) . " " . base64_decode($rows[7]) ?>
                                    </i></h4>


                            </div>

                            <div class="modal-body" style="overflow: auto">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="img-rounded img-responsive" src="https://agrocetep.epizy.com/images/plants/<?= base64_decode($rows[10]) ?>" style="max-height: 310px; margin-inline: auto;">
                                    </div>
                                    <div class="col-sm-6">
                                        <h3>

                                            Taxonomia

                                        </h3>

                                        <table class="table table-condensed table-bordered">

                                            <tbody>
                                                <tr>
                                                    <td>Reino</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[1]) ?>
                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td>Filo</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[2]) ?>
                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td>Classe</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[3]) ?>
                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td>Ordem</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[4]) ?>
                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td>Família</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[5]) ?>
                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td>Gênero</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[6]) ?>
                                                        </i></td>
                                                </tr>
                                                <tr>
                                                    <td>Espécie</td>
                                                    <td><i>
                                                            <?= base64_decode($rows[7]) ?>
                                                        </i></td>
                                                </tr>
                                                <!-- Adicione mais linhas conforme necessário -->
                                            </tbody>

                                            <!-- Adicione mais linhas conforme necessário -->

                                            </tbody>

                                        </table>

                                    </div>
                                </div>







                                <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">

                                <h3>Nome popular: <?= base64_decode($rows[8])?></h3>

                                <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">

                                <h3>Cidade: <?= base64_decode($rows[9])?></h3>

                                <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">

                                <h3>Pesquisadores:</h3>

                                <p><?= base64_decode($rows[13])?></p>

                                <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">

                                <h3>

                                    Observações

                                </h3>

                                <p>

                                <?= base64_decode($rows[11]) ?>
                                </p>

                                <?php
                                if ($rows[14] == 'on'){
                
                                
                                ?>
                                <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                                <h3>Medicamento relacionado: </h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="img-rounded img-responsive" src="/images/Logo AgroCETEP.png">
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Nome: Lorem ipsum</p>
                                        <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                            odit delectus nisi itaque tempore in voluptates, minima eaque nesciunt, esse
                                            unde libero beatae harum! A, eaque? Voluptatum tempora iure inventore?</p>
                                    </div>
                                </div>

                            </div>

                        <?php
            } }?>
                    </div>

                </div>





            </div>


        </div>






        </div>





        <div id="search" class="tab-pane fade">

            <h2 class="text-center">

                Em construção...

            </h2>

        </div>

        </div>

    </section>

    <footer class="container-fluid p-5 bg-secondary text-white" style="

    background-color: black;

    color: white;

">

        <div class="row">

            <div class="col-md-12 text-center">

                <h3>Desenvolvido pelo CETEP para o mundo!</h3>

                <p>Sistema protegido por <a href="http://ebs-systems.epizy.com/" target="_blank"
                        style="color: white">EBS Security Systems</a></p>

            </div>

        </div>

    </footer>

    <div vw class="enabled">

        <div vw-access-button class="active"></div>

        <div vw-plugin-wrapper>

            <div class="vw-plugin-top-wrapper"></div>

        </div>

    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

    <script>

        new window.VLibras.Widget('https://vlibras.gov.br/app');

    </script>

</body>

</html>

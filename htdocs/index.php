<?php
require 'php/class.php';
$cls = new database;
$link = $cls->GetLinkMySQLI();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>AGROCETEP - Catálogos</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="google-site-verification" content="3xdx50DorW0BgAza_PUsK2xVgQGUZegVIt7wxWjDDF0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="/images/Logo AgroCETEP.png">
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
              <img src="/images/Logo AgroCETEP.png" class="img-rounded" alt="" style="width: 50%; margin-block: 20%;"></a>
          </div>
          <div class="col-md-9 text-center">
            <div style="margin-block: 10%;">
              <a href="https://agrocetep.wordpress.com/" style="color: white"><h2>AGROCETEP</h2>
              <h4>Catálogo online</h4></a>                      
            </div>                    
          </div> 
        </div>                             
      </header>
      <ul class="nav nav-tabs">
        <li class=""><a href="/painel/">Área do usuário <span class="glyphicon glyphicon-user"></span></a></li> 
        <li class="active"><a data-toggle="tab"href="#all">Todas as espécies <span class="glyphicon glyphicon-leaf"></span></a></li>
        <!--        <li class="active"><a href="#home">Perfil <span class="glyphicon glyphicon-user"></span></a></li>        -->
        <li><a data-toggle="tab" href="#search">Pesquisar <span class="glyphicon glyphicon-search"></span></a></li>
        <!--<li><a href="/painel/logout.php">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>-->
      </ul>

      <div class="tab-content jumbotron">

        <div id="all" class="tab-pane fade in active"> 
          <h2>Todo o catálogo (DINÂMICO)</h2>
          
          <?php 
$query = mysqli_query($link, "SELECT * FROM `SPECIE`");
$cont = mysqli_num_rows($query);  

while($rows = mysqli_fetch_array($query)) {
    ?>
     <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
       
    <div class="row" style="display: flex;">
        <div class="col-sm-4" style="overflow: hidden; padding-inline: auto; text-align: center">                         
            <div style="margin-inline: auto; width: 80%;">
                <a data-toggle="modal" href="#ModalPhoto<?= $rows[0] ?>">
                    <img class="img-rounded img-responsive" src="https://agrocetep.epizy.com/images/plants/<?= base64_decode($rows[10]) ?>" alt="Foto da planta" style="/*max-height: 200px;max-width: 200px;min-width: 200px;min-height: 200px; */ width: 100%; margin-inline: auto">
                </a>
            </div>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalPhoto<?= $rows[0] ?>" style="width: 75%; margin-inline: auto">Ver foto <span class="glyphicon glyphicon-picture"></span></button> 
        </div>

        <div id="ModalPhoto<?= $rows[0] ?>" class="modal fade" role="dialog" style="display: none;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="size: 90%">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Espécie: <i><?= base64_decode($rows[6]) ." ". base64_decode($rows[7]) ?></i></h4>
            </div>
            <div class="modal-body" style="overflow: auto">
                <img class="img-rounded img-responsive" src="https://agrocetep.epizy.com/images/plants/<?= base64_decode($rows[10]) ?>">
                <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                <h3>
                    Taxonomia
                </h3>
                <table class="table table-condensed table-bordered">                      
                    <tbody>  
                        <tr>
                            <td>Reino</td>
                            <td><i><?= base64_decode($rows[1]) ?></i></td>
                        </tr>
                        <tr>
                            <td>Filo</td>
                            <td><i><?= base64_decode($rows[2]) ?></i></td>
                        </tr>
                        <tr>
                            <td>Classe</td>
                            <td><i><?= base64_decode($rows[3]) ?></i></td>
                        </tr>
                        <tr>
                            <td>Ordem</td>
                            <td><i><?= base64_decode($rows[4]) ?></i></td>
                        </tr>
                        <tr>
                            <td>Família</td>
                            <td><i><?= base64_decode($rows[5]) ?></i></td>
                        </tr>
                        <tr>
                            <td>Gênero</td>
                            <td><i><?= base64_decode($rows[6]) ?></i></td>
                        </tr>
                        <tr>
                            <td>Espécie</td>
                            <td><i><?= base64_decode($rows[7])?></i></td>
                        </tr>
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
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
            </div>
            <div class="modal-footer">
                <a href="https://agrocetep.epizy.com/images/plants/<?= base64_decode($rows[10]) ?>" target="_blank">
                    <button type="button" class="btn btn-default">Visualizar em nova aba <span class="glyphicon glyphicon-picture"></span></button>
                </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>


        </div>

        <div class="col-sm-8" style="overflow: auto;">            
            <h4><span class="glyphicon glyphicon-leaf"></span> Espécie: <i><?= base64_decode($rows[6]) ?> <?= base64_decode($rows[7]) ?></i></h4>
            <h4><span class="glyphicon glyphicon-new-window"></span> <a data-toggle="modal"  href="#ModalPhoto<?= $rows[0] ?>">Visualizar</a></h4>
            <h4><span class="glyphicon glyphicon-calendar"></span> Catalogada em: <?= date('d/m/Y', strtotime($rows[12])) ?></h4>              
        </div>
    </div>
    <?php
}
?>

          
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
          <p>Sistema protegido por <a href="http://ebs-systems.epizy.com/" target="_blank" style="color: white">EBS Security Systems</a></p>
        </div>                
      </div>
    </footer>
  </body>
</html>
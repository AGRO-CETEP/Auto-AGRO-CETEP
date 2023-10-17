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
          <h2>Todo o catálogo (estático)</h2>
          <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
          <div class="row" style="
    display: flex;
">
            <div class="col-sm-2" style="overflow: hidden">                         
              <a data-toggle="modal" href="#ModalPhoto1"><img class="img-rounded img-responsive" src="https://agrocetep.files.wordpress.com/2022/10/amaranthus-spinosus-foto-2.jpg?w=1024" alt="Foto do perfil" style="max-height: 250px; max-width: 250px;"></a>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalPhoto1" style="width: 100%">Ver foto <span class="glyphicon glyphicon-picture"></span></button> 
            </div>
             
            <div id="ModalPhoto1" class="modal fade" role="dialog" style="display: none;">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="size: 90%">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Espécie: <i>Amaranthus spinosus</i></h4>
                  </div>
                  <div class="modal-body" style="overflow: auto">
                    <img class="img-rounded img-responsive" src="https://agrocetep.files.wordpress.com/2022/10/amaranthus-spinosus-foto-2.jpg?w=1024">
                    <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                    <h3>
                       Taxonomia
                    </h3>
                    <table class="table table-condensed table-bordered">                      
                      <tbody>  
                        <tr>
                          <td>Reino</td>
                          <td><i>Plantae</i></td>
                        </tr>
                        <tr>
                          <td>Filo</td>
                          <td><i>Angiospérmicas</i></td>
                        </tr>
                        <tr>
                          <td>Classe</td>
                          <td><i>Eudicotiledóneas</i></td>
                        </tr>
                        <tr>
                          <td>Ordem</td>
                          <td><i>Caryophyllales</i></td>
                        </tr>
                        <tr>
                          <td>Família</td>
                          <td><i>Amaranthaceae</i></td>
                        </tr>
                        <tr>
                          <td>Gênero</td>
                          <td><i>Amaranthus</i></td>
                        </tr>
                        <tr>
                          <td>Espécie</td>
                          <td><i>Amaranthus spinosus</i></td>
                        </tr>
                      </tbody>
                    </table>
                    <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                    <h3>
                      Observações
                    </h3>
                    <p>
                      Costuma ser uma erva ou subarbusto ereto, de 20 a 80 cm de altura, espinhoso. O seu principal bioma é o serrado. Esta planta raramente frequenta lugares úmidos. Ela renova muito rápido quando cortada, em relação a algumas plantas.

É uma planta relativamente tóxica para o gado!
                    </p>
                  </div>
                  <div class="modal-footer">
                    <a href="https://agrocetep.files.wordpress.com/2022/10/amaranthus-spinosus-foto-2.jpg?w=1024" target="_blank"><button type="button" class="btn btn-default">Visualizar em nova aba <span class="glyphicon glyphicon-picture"></span></button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                  </div>
                </div>

              </div>
            </div>
           
            
            
            <div class="col-sm-10" style="
    overflow: auto;
">            
              <h4><span class="glyphicon glyphicon-leaf"></span> Espécie: <i>Amaranthus spinosus</i></h4>
              <h4><span class="glyphicon glyphicon-info-sign"></span> Sobre: Erva daninha tóxica para o gado!</h4>
              <h4><span class="glyphicon glyphicon-new-window"></span> <a data-toggle="modal"  href="#ModalPhoto1">Visualizar</a></h4>
             <!-- <h4><span class="glyphicon glyphicon-calendar"></span> Catalogada em: 31/Dec/1969</h4> -->             
            </div>
          </div>
          
          <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
          
          <div class="row" style="
    display: flex;
">
            <div class="col-sm-2" style="overflow: hidden">                         
              <a data-toggle="modal" href="#ModalPhoto2"><img class="img-rounded img-responsive" src="https://agrocetep.files.wordpress.com/2022/11/maxresdefault-3.jpg" alt="Foto do perfil" style="max-height: 250px; max-width: 250px;"></a>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalPhoto2" style="width: 100%">Ver foto <span class="glyphicon glyphicon-picture"></span></button> 
            </div>
             
            <div id="ModalPhoto2" class="modal fade" role="dialog" style="display: none;">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="size: 90%">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Espécie: <i>Lantana camara</i></h4>
                  </div>
                  <div class="modal-body" style="overflow: auto">
                    <img class="img-rounded img-responsive" src="https://agrocetep.files.wordpress.com/2022/11/maxresdefault-3.jpg">
                    <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                    <h3>
                       Taxonomia
                    </h3>
                    <table class="table table-condensed table-bordered">                      
                      <tbody>  
                        <tr>
                          <td>Reino</td>
                          <td><i>Plantae</i></td>
                        </tr>
                        <tr>
                          <td>Filo</td>
                          <td><i>Magnoliophyta</i></td>
                        </tr>
                        <tr>
                          <td>Classe</td>
                          <td><i>Magnoliopsida</i></td>
                        </tr>
                        <tr>
                          <td>Ordem</td>
                          <td><i>Lamiales</i></td>
                        </tr>
                        <tr>
                          <td>Família</td>
                          <td><i>Verbenaceae</i></td>
                        </tr>
                        <tr>
                          <td>Gênero</td>
                          <td><i>Lantana</i></td>
                        </tr>
                        <tr>
                          <td>Espécie</td>
                          <td><i>Lantana camara</i></td>
                        </tr>
                      </tbody>
                    </table>
                    <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
                    <h3>
                      Observações
                    </h3>
                    <p>
                      Costuma ser um arbusto ornamental com flores pequenas em coloração amarela-alaranjada.<br>Produz um pequeno fruto não comestível que fica com uma cor escura quando maduro.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <a href="https://agrocetep.files.wordpress.com/2022/11/maxresdefault-3.jpg" target="_blank"><button type="button" class="btn btn-default">Visualizar em nova aba <span class="glyphicon glyphicon-picture"></span></button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                  </div>
                </div>

              </div>
            </div>
           
            
            
            <div class="col-sm-10" style="
    overflow: auto;
">            
              <h4><span class="glyphicon glyphicon-leaf"></span> Espécie: <i>Lantana camara</i></h4>
              <h4><span class="glyphicon glyphicon-info-sign"></span> Sobre: Flor conhecida como Ipê amarelinho</h4>
              <h4><span class="glyphicon glyphicon-new-window"></span> <a data-toggle="modal"  href="#ModalPhoto2">Visualizar</a></h4>
             <!-- <h4><span class="glyphicon glyphicon-calendar"></span> Catalogada em: 31/Dec/1969</h4> -->             
            </div>
          </div>
        </div>
      
        <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
        
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
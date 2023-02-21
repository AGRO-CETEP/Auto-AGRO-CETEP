<?php

include('protect.php');

/*if(!isset($_SESSION['ID_USER']{
  session_start();
}*/
$servidor = 'sql205.epizy.com';
$username = 'epiz_33347322';
$password = '0C5drBLQ48P';
$database = 'epiz_33347322_DATABASE';
$conexao = mysql_connect($servidor, $username, $password) 
  or die("Erro ao conectar ao banco de dados");
$db = mysql_select_db($database)
  or die("Erro ao selecionar banco de dados");
$query = mysql_query("SELECT * FROM USERS WHERE ID_USER = ".$_SESSION['ID_USER']);

$User = mysql_fetch_array($query);

$date = $User[5];
$input = $date;
$date = strtotime($input);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>AGROCETEP - Painel</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
              <h2>AGROCETEP</h2>
              <h4>Catálogo online</h4>                      
            </div>                    
          </div> 
        </div>                             
      </header>
      <ul class="nav nav-tabs">
        <li><a href="/">Catálogos <span class="glyphicon glyphicon-book"></span></a></li>
        <li class="active"><a data-toggle="tab" href="#home">Perfil <span class="glyphicon glyphicon-user"></span></a></li>        
        <li><a data-toggle="tab" href="#info">Sobre <span class="glyphicon glyphicon-info-sign"></span></a></li>
        <li><a href="/painel/logout.php">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
      </ul>

      <div class="tab-content jumbotron">

        <div id="home" class="tab-pane fade in active">          

          <h2>Informações da conta</h2>

          <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
          <div class="row" style="display: flex">
            <div class="col-sm-2">                            
              <img class="img-circle img-responsive" src="https://st.depositphotos.com/1842549/3903/i/600/depositphotos_39038955-stock-photo-user-profile-icon.jpg" alt="Foto do perfil" style="width: 90px">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalPhoto">Alterar foto <span class="glyphicon glyphicon-camera"></span></button>
            </div>
            <div class="col-sm-10" style="
                                          overflow: auto;
                                          ">            
              <h4><span class="glyphicon glyphicon-user"></span> Nome: <?php echo($User[1]);?></h4>
              <h4><span class="glyphicon glyphicon-envelope"></span> E-mail: <br><a href="mailto:<?php echo($User[2]);?>"><?php echo($User[2]);?></a></h4>
              <h4><span class="glyphicon glyphicon-new-window"></span> Currículo Lattes: <br><a href="<?php echo($User[4]);?>" target="_blank"><?php echo($User[4]);?></a></h4>
              <h4><span class="glyphicon glyphicon-calendar"></span> Conta criada em: <?php echo date('d/M/Y', $date);?></h4>              
            </div>
            <div id="ModalPhoto" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ops...</h4>
                  </div>
                  <div class="modal-body">
                    <p>Opção indisponível no momento!</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                  </div>
                </div>

              </div>
            </div>            
          </div>
          <hr style="border: 0; border-top: 3px solid black;">
          <div class="row"></div>
          <div class="col-sm-4">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1"><h3>Opções da conta</h3></a>
                  </h4>
                </div>
                <div id="collapse1" class="collapse">
                  <ul class="list-group">                    
                    <li class="list-group-item">
                      <button class="btn btn-warning well-bg" style="width: 100%;"><h5 style="margin-block: 0px;">Trocar a senha <span class="glyphicon glyphicon-lock"> </span></h5></button>
                    </li>
                    <li class="list-group-item">
                      <button class="btn btn-danger well-bg" style="width: 100%;"><h5 style="margin-block: 0px;">Excluir conta <span class="glyphicon glyphicon-trash"> </span></h5></button>
                    </li>                          
                  </ul>                        
                </div>
              </div>
            </div>                  
          </div>                    
          <div class="col-sm-8">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2"><h3>Avisos da equipe AGROCETEP</h3></a>
                  </h4>
                </div>
                <div id="collapse2" class="collapse">
                  <ul class="list-group">
                    <li class="list-group-item" style="overflow: auto; max-height: 200px;">                               
                      <p style="
                                text-align: justify;
                                ">Olá, Pesquisador(a),<br><br>
                        É um prazer para nós ter a você como um colaborador de conteúdo em nosso sistema de informação!<br>
                        Atualmente nosso sistema de informação está em desenvolvimento. Estamos trabalhando para concluí-lo o mais breve possível.<br>
                        <br> Caso tenha dificuldade com algo na nossa plataforma entre em contato...</p>
                    </li>                                                      
                  </ul>                        
                </div>
              </div>               
            </div>  
          </div></div>


        <div id="info" class="tab-pane fade">
          <h2>Sobre a equipe de pesquisadores AGROCETEP</h2>
          <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
          <p style="text-align: justify"><strong>AGROCETEP</strong> é o nome que foi dado ao projeto de catalogação online do levantamento florístico do CETEP Alberto Torres. <br></p>
          <div class="row">


            <div class="col-sm-5">
              <img class="img-responsive" src="https://agrocetep.files.wordpress.com/2022/08/whatsapp-image-2022-08-15-at-08.00.43.jpeg" alt="" style="
                                                                                                                                                      max-width: 300px;
                                                                                                                                                      margin-inline: auto;
                                                                                                                                                      ">  
            </div>
            <div class="col-sm-7" style="
                                         ">
              <img class="img-responsive" src="https://agrocetep.files.wordpress.com/2022/07/cruz-news.jpg" alt="" style="
                                                                                                                          max-width: 100%;
                                                                                                                          margin-inline: auto;
                                                                                                                          margin-block: auto;
                                                                                                                          ">  
            </div>
          </div>

          <p style="text-align: justify; margin-top: 10px">
            Atualmente estamos iniciando a automação do catálogo para que qualquer pesquisador posa inserir e alterar informações, contribuíndo para uma melhor identificação das espécies.
          </p>
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
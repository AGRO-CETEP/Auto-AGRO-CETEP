<?php
require '../php/class.php';
$cls = new database;
include('protect.php');

$query = mysqli_query($cls->GetLinkMySQLI(), "SELECT * FROM USERS WHERE ID_USER = ".$_SESSION['ID_USER']);

$User = mysqli_fetch_array($query);

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
              <a href="https://agrocetep.wordpress.com/" style="color: white"><h2>AGROCETEP</h2>
              <h4>Catálogo online</h4></a>                      
            </div>                    
          </div> 
        </div>                             
      </header>
      <ul class="nav nav-tabs">
        <li><a href="/">Catálogos <span class="glyphicon glyphicon-leaf"></span></a></li>
        <li class="active"><a data-toggle="tab" href="#home">Perfil <span class="glyphicon glyphicon-user"></span></a></li>
        <li><a data-toggle="tab" href="#catalog">Catalogar <span class="glyphicon glyphicon-book"></span></a></li>
        <li><a data-toggle="tab" href="#info">Sobre <span class="glyphicon glyphicon-info-sign"></span></a></li>
        <li><a href="/painel/logout.php">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
      </ul>

      <div class="tab-content jumbotron">

        <div id="home" class="tab-pane fade in active">          

          <h2>Informações da conta</h2>

          <hr style="margin-block-start: 10px; border: 0; border-top: 3px solid black;">
          <div class="row" style="display: flex">
            <div class="col-sm-2" style="
    padding-block: 20px;
">                            
              <img class="img-circle img-responsive" src="https://st.depositphotos.com/1842549/3903/i/600/depositphotos_39038955-stock-photo-user-profile-icon.jpg" alt="Foto do perfil" style="width: 100px;height: 100px; margin-inline: auto">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalPhoto" style="
    width: 100%;
">Alterar foto <span class="glyphicon glyphicon-camera"></span></button>
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
                      <button class="btn btn-warning well-bg" style="width: 100%;" data-toggle="modal" data-target="#ModalPhoto"><h5 style="margin-block: 0px;">Trocar a senha <span class="glyphicon glyphicon-lock"> </span></h5></button>
                    </li>
                    <li class="list-group-item"> 
                      <button class="btn btn-danger well-bg" style="width: 100%;" data-toggle="modal" data-target="#ModalPhoto"><h5 style="margin-block: 0px;">Excluir conta <span class="glyphicon glyphicon-trash"> </span></h5></button>
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

        <div id="catalog" class="tab-pane fade">
          <h2>
            Catalogar uma espécie
          </h2>
          <hr style="border: 0; border-top: 3px solid black;">
          <form method="POST" action="" class="row">           
            <div class="col-sm-4">
              <label class="form-label">Reino *</label>
              <input type="text" class="form-control" id="reino" name="reino" required>
            </div>
            <div class="col-sm-4">
              <label class="form-label">Filo</label>
              <input type="email" class="form-control" id="filo" name="filo">
            </div>
            <div class="col-sm-4">
              <label class="form-label">Classe</label>
              <input type="text" class="form-control" id="classe" name="classe">
            </div>
            <div class="col-sm-4">
              <label class="form-label">Ordem</label>
              <input type="text" class="form-control" id="ordem" name="ordem">
            </div>
            <div class="col-sm-4">
                <label class="form-label">Família</label>
                <input type="text" class="form-control" id="familia" name="familia">
              </div>
            <div class="col-sm-4">
                <label class="form-label">Gênero</label>
                <input type="text" class="form-control" id="genero" name="genero" placeholder="ex: Homo">
              </div>
            <div class="col-sm-4">
                <label class="form-label">Espécie * (sem o gênero)</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="ex: sapiens" required>
              </div>
            <div class="col-sm-4">
                <label class="form-label">Nome popular</label>
                <input type="text" class="form-control" id="nomePopular" name="nomePopular">
              </div>
            <div class="col-sm-4">
                <label class="form-label">Cidade *</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
              </div>
            <!--<div class="col-sm-4">
                <label class="form-label">Link da imagem (opcional)</label>
                <input type="text" class="form-control" id="img" name="img">
              </div>-->
            
            <div class="col-sm-4">
                <label class="form-label">Data da coleta</label>
                <input type="date" class="form-control" id="data" name="data">
              </div>
            <div class="col-sm-8">
              <label class="form-label">Descrição da espécie</label>
              <textarea class="form-control" id="txtdescricao" rows="5" ></textarea>
            </div>
            <div class="col-sm-4">
               <label class="form-label">Pesquisadores envolvidos: (clique para selecionar) </label>
              <select class="form-select" id="pesquisador" name="pesquisador" multiple required style="width: 100%">
              <?php
              $AllUsers = mysqli_query($cls->GetLinkMySQLI(), "SELECT * FROM USERS");
              while ($rows = mysqli_fetch_array($AllUsers)) {
                echo '<option value="'.$rows[0].'">'.$rows[1].'</option>';
                
              }
              ?>
                                
                <!-- Adicione mais opções conforme necessário -->
              </select>
            </div>
            
            
            <div class="col-sm-4">                            
              <label class="form-label">Pesquisadores selecionados:</label>
                <textarea class="form-control" id="txtpesquisadores" rows="5" ></textarea>
            </div>
            <div class="col-sm-4">
                <label for="imagem">Foto da planta:</label>
                <input type="file" name="imagem" id="imagemInput">
            </div>
            <div class="col-sm-4">
              <a href ="#" target="_blank" id="imagemLink"><img id="imagemPreview" src="#" alt="Prévia da Imagem" style="display: none; max-width: 300px; max-height: 300px; margin-top: 10px; margin-inline: auto"></a>
            </div>
            
            <script>
        // Função para exibir a prévia da imagem selecionada
        function exibirPreviewImagem(input) {
            var imagemPreview = document.getElementById('imagemPreview');
            var imagemLink = document.getElementById('imagemLink');
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imagemPreview.style.display = 'block';
                    imagemPreview.src = e.target.result;
                    imagemLink.href = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
                
            } else {
                imagemPreview.style.display = 'none';
                imagemLink.style.display = 'none';
                imagemPreview.src = '';
                imagemLink.href = '#'; // Define o href como "#" para não redirecionar em caso de ausência de imagem
            }
        }

        // Vincule a função ao evento onchange do input de imagem
        document.getElementById('imagemInput').addEventListener('change', function () {
            exibirPreviewImagem(this);
        });
        
        document.getElementById('imagemLink').addEventListener('click', function(event) {
        event.preventDefault(); // Evita que o link seja aberto na aba atual
        var url = 'https://agrocetep.epizy.com/painel/img'; // Substitua com a URL desejada
        window.open(url, '_blank');
    });
    </script>

            
                         

            <script>
              // Evento que é acionado quando alguma opção do select é selecionada ou desselecionada
              document.getElementById('pesquisador').addEventListener('change', function() {
                // Obter todas as opções selecionadas
                var selectedOptions = Array.from(this.selectedOptions).map(function(option) {
                  return option.text;
                });
                // Atualizar o conteúdo do textarea com as seleções
                document.getElementById('txtpesquisadores').value += selectedOptions.join('\n') + '\n';
              });
            </script>

            <div class="text-center col-sm-4">              
              <button type="submit" class="btn btn-success" style="width: 100%; margin-block: 20px"><b>CADASTRAR</b></button>
            </div>
            <div class="col-sm-4"></div>
          </form>
        </div>

        
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
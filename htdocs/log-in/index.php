<?php
require_once '../php/class.php';
$cls = new database;
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>AGROCETEP - Login</title>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="3xdx50DorW0BgAza_PUsK2xVgQGUZegVIt7wxWjDDF0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/images/Logo AgroCETEP.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body style="background-image: url('/images/fundo-de-folhas-verdes.jpg');">
    <header class="container-fluid  bg-secondary text-white">
      <div class="row">
        <div class="col-sm-3 text-center">
          <a href="https://agrocetep.wordpress.com/">
            <img src="/images/Logo AgroCETEP.png" class="rounded" alt="" style="width: 50%; margin-block: 20%;"></a>
        </div>
        <div class="col-md-9 text-center">
          <div style="margin-block: 10%;">
            <h1>AGROCETEP</h1>
            <h5>Catálogo online</h5>                      
          </div>                    
        </div> 
      </div>                             
    </header>

    <div class="row" style="
                            margin-block-end: 50px;
                            max-width: 100%;
                            padding-inline: 10%;
                            ">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="text-white">

          <?php
          if(isset($_POST['email']) || isset($_POST['pswd']))
          {
            $user = addslashes($_POST['email']);
            $password = addslashes($_POST['pswd']);

            for ($i=0; $i < 255; $i++) { 
              $password = sha1($password);
            } 

            if(!empty($user) && !empty($password))
            {
              $cls->conectar("epiz_33347322_DATABASE", "sql205.epizy.com", "epiz_33347322", "0C5drBLQ48P");
              if($cls->msg == "")
              {
                if($cls->login($user, $password))
                {
                  header("Location: /painel/");
                }
                else
                {
                  //echo "Usuário ou senha incorretos!";
          ?>

          <div class="alert alert-danger" style="margin-top: 5px"><strong>Email ou senha incorretos!</strong></div>


          <?php
                }
              }
              else
              {
                //echo "Erro ao conectar!!!".$cls->msg;
          ?>
          <div class="alert alert-danger" style="margin-top: 5px"><strong>Erro na conexão com banco de dados!</strong></div>
          <?php
                echo $cls->msg;
              }


            }
            else
            {
              echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Preencha todos os campos!</strong></div>');
            }
          }
          ?> 


          <form action="" method="post">
            <div class="mt-3">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
              <label for="pwd">Senha:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd">
            </div>                        
            <button type="submit" class="btn btn-dark" style="
                                                              width: 100%;
                                                              "><strong>ENTRAR</strong></button>
          </form>
          <p class="text-center" style="
                                        margin-top: 10px;
                                        background-color: #ffc107;
                                        padding-block: 5px;
                                        color: black;
                                        "><strong>
            Não tem uma conta AGROCETEP? <a href="/insert-user" class="text-white">Cadastre-se gratuitamente!</a></strong>
          </p>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>


    <footer class="container-fluid p-5 bg-secondary text-white">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3>Desenvolvido pelo CETEP para o mundo!</h3>
          <p>Sistema de login protegido por <a href="http://ebs-systems.epizy.com/" style="color: white">EBS Security Systems</a></p>
        </div>                
      </div>
    </footer>
  </body>
</html>
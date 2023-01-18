<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>AGROCETEP - Cadastro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="/Front-End/htdocs/images/Logo AgroCETEP.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
      </head>
      <body style="background-image: url('/Front-End/htdocs/images/fundo-de-folhas-verdes.jpg');">
        <header class="container-fluid  bg-secondary text-white">
            <div class="row">
                <div class="col-sm-3 text-center">
    <a href="https://agrocetep.wordpress.com/" target="_blank">
                    <img src="/Front-End/htdocs/images/Logo AgroCETEP.png" class="rounded" alt="" style="width: 50%; margin-block: 20%;"></a>
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
            
            <div class="col-sm-12">
                <div class="text-white">
                    <form action="index.php" method="post">
                        <div class="mt-3">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                        </div>
                        <div class="mt-3">
                            <label for="nome">Lattes ID:</label>
                            <input type="text" class="form-control" id="lattes" placeholder="Link do Lattes" name="lattes">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="email">Email:</label>
                          <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="pwd">Senha:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd">
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Confirmar Senha:</label>
                            <input type="password" class="form-control" id="cpwd" placeholder="Confirme a senha" name="cpswd">
                          </div>                        
                        <button type="submit" class="btn btn-dark" style="width: 100%;">Cadastrar</button>
                    </form>
                    <?php

                    if(isset($_POST['nome']) || isset($_POST['lattes']) || isset($_POST['email']) || isset($_POST['pswd']) || isset($_POST['cpswd'])) {

                        $nome = addslashes($_POST['nome']);                                    
                        $lattes = addslashes($_POST['lattes']);
                        $email = addslashes($_POST['email']);
                        $password = addslashes($_POST['pswd']);
                        $cpassword = addslashes($_POST['cpswd']);

                        if (!empty($nome) && !empty($email) && !empty($password) && !empty($cpassword)) {
                            if ($password == $cpassword) {
                                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                                {//a partir daqui cadastramos no banco de dados
                                    for ($i=0; $i < 255; $i++) { 
                                        $password = sha1($password);
                                    }                                                
                                    $timezone = new DateTimeZone('America/Sao_Paulo');                                         
                                    $now = new DateTime('now', $timezone);
                                    $data = $now->format('Y/m/d');
                                    $hora = $now->format('H:i');

                                    $usuario = 'epiz_33347322';
                                    $senha = '0C5drBLQ48P';
                                    $database = 'epiz_33009677_DATABASE';
                                    $host = 'sql205.epizy.com';

                                    $mysqli = new mysqli($host, $usuario, $senha, $database);

                                    if($mysqli->error) {
                                        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
                                    }

                                    $sql_code = "INSERT INTO `USERS`(`ID_USER`, `NOME_USER`, `EMAIL_USER`, `HASH_USER`, `LATTES_USER`, `DATA_USER`) VALUES ('', '$nome', '$email', '$password', '$lattes', '$data')";
                                    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);

                                    echo('<div class="alert alert-success" style="margin-top: 5px"><strong>Usuário cadastrado com sucesso!</strong></div>');
                                }
                                else{
                                    echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Endereço de e-mail inválido!</strong></div>');
                                }
                            }
                            else {
                                echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>As senhas não conferem!/strong></div>');
                            }
                        }
                        else {
                            echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Preencha todos os campos!</strong></div>');
                        }
                        /*
                        $servidor = 'sql205.epizy.com';
                        $username = 'epiz_33347322';
                        $password = '0C5drBLQ48P';
                        $database = 'epiz_33009677_DATABASE';
                        $conexao = mysql_connect($servidor, $username, $password)
                            or die("Erro ao conectar ao banco de dados");
                        $db = mysql_select_db($database)
                            or die("Erro ao selecionar banco de dados");*/
                    

                    }
                    ?>
                  </div>
            </div>            
        </div>
        
        
        <footer class="container-fluid p-5 bg-secondary text-white">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Desenvolvido pelo CETEP para o mundo!</h3>
                    <p>Sistema de login protegido por <a href="http://ebs-systems.epizy.com/" style="color: white">EBS-Systems</a></p>
                </div>                
            </div>
        </footer>
        </body>
        </html>
        
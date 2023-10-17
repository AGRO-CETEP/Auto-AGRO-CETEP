<?php
    Class database
    {
        private $pdo;
        public $msg = "";
        public function conectar($nome, $host, $user, $password)
        {
            global $pdo;
            global $msg;
            try {
                
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$user,$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
            }
            
        }

        public function GetLinkMySQLI()
        {
          $usuario = 'epiz_33347322';
          $senha = '0C5drBLQ48P';
          $database = 'epiz_33347322_DATABASE';
          $host = 'sql205.epizy.com';
          
          $mysqli = new mysqli($host, $usuario, $senha, $database);
          return $mysqli;
        }

        public function login($user, $password)
        {
            global $pdo;  
            $sql = $pdo->prepare("SELECT ID_USER FROM USERS WHERE EMAIL_USER = :u AND HASH_USER = :h");  
            $sql->bindValue(":u", $user);
            $sql->bindValue(":h", $password);    //lembrar de aplicar criptografia depois
            //$sql = $pdo->prepare("SELECT id_user FROM usuarios WHERE nome_user = '".$user."' AND hash_user = '".$password."'");  
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                $dados = $sql->fetch();
                session_start();
                $_SESSION['ID_USER'] = $dados['ID_USER'];                
                return true;
            }
            else
            {
                return false;
            }
        }
      
      
      public function GetUser($id)
      {
        try {

          $servidor = 'sql205.epizy.com';
          $username = 'epiz_33347322';
          $password = '0C5drBLQ48P';
          $database = 'epiz_33347322_DATABASE';
          $conexao = mysql_connect($servidor, $username, $password) 
            or die("Erro ao conectar ao banco de dados");
          $db = mysql_select_db($database)
            or die("Erro ao selecionar banco de dados");
          $query = mysql_query("SELECT * FROM USERS WHERE ID_USER = ".$id);
             
          return mysql_fetch_array($query);
        } catch (Exception $e) {
          $msg = $e->getMessage();
        }            
      }
    }
?>
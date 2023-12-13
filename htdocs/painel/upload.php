<?php
require '../php/class.php';
$cls = new database;
include('protect.php');

// Estabelecendo as configurações do banco de dados
$link = $cls->GetLinkMySQLI();
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        try {
            // Diretório para salvar a imagem (certifique-se de ter permissões de escrita)
            $diretorio_destino = "../images/plants/";

            $nome_arquivo = $_FILES["imagem"]["name"];

            // Use pathinfo para obter informações sobre o caminho do arquivo
            $info_arquivo = pathinfo($nome_arquivo);

            // O formato do arquivo está armazenado em $info_arquivo["extension"]
            //$formato_do_arquivo = $info_arquivo["extension"];

            // Gera um nome único para o arquivo
            $nome_arquivo = uniqid('imagem_') . '_.' . $info_arquivo["extension"];// . $_FILES["imagem"]["name"];

            // Caminho completo para o arquivo
            $caminho_completo = $diretorio_destino . $nome_arquivo;

            // Move o arquivo para o diretório desejado
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_completo);

            //echo "Upload bem-sucedido! O arquivo foi salvo em: " . $caminho_completo;
            
            // Mandando os dados para o banco de dados
            
            
            $query = mysqli_query($link, "INSERT INTO `SPECIE` (`ID_SPECIE`, `REINO_S`, `FILO_S`, `CLASSE_S`, `ORDEM_S`, `FAMILY_S`, `GENERO_S`, `SPECIE`, `NOME_POPULAR`, `CIDADE_SPECIE`, `PHOTO_1`, `COMMENT`, `DATA_COLETA`, `COLETORES`, `MEDICINAL_SPECIE`) VALUES (NULL, '".base64_encode($_POST['reino'])."', '".base64_encode($_POST['filo'])."', '". base64_encode($_POST['classe'])."', '".base64_encode($_POST['ordem'])."', '".base64_encode($_POST['familia'])."', '".base64_encode($_POST['genero'])."', '".base64_encode($_POST['especie'])."', '".base64_encode($_POST['nomePopular'])."', '".base64_encode($_POST['cidade'])."', '".base64_encode($nome_arquivo)."', '".base64_encode($_POST['txtdescricao'])."', '".$_POST['data']."', '".base64_encode($_POST['txtPesquisadores'])."', '".$_POST['medicinal']."')");
            
            header('Location: /painel');
        } catch (Exception $e) {
            echo "Erro ao enviar o arquivo: " . $e->getMessage();
        }
    } else {
        echo "Erro no envio do arquivo. Código de erro: " . $_FILES["imagem"]["error"];
    }
}
?>
<?php
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
            header('Location: /painel');
        } catch (Exception $e) {
            echo "Erro ao enviar o arquivo: " . $e->getMessage();
        }
    } else {
        echo "Erro no envio do arquivo. Código de erro: " . $_FILES["imagem"]["error"];
    }
}
?>
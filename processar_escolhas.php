<?php
// Removendo a parte de conexão com o banco de dados

// Verificar se foi enviado um modelo, tamanho e pagamento
if (isset($_POST['estado']) && isset($_POST['modelo']) && isset($_POST['tamanho']) && isset($_POST['pagamento'])) {
    $estado = $_POST['estado'];
    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $pagamento = $_POST['pagamento'];
    
    // Salvando as escolhas do usuário em um arquivo de texto
    $escolhas = "$estado, $modelo, $tamanho, $pagamento";
    file_put_contents("escolhas.txt", $escolhas);
    
    // Redirecionar para o link do WhatsApp com os parâmetros
    $link_whatsapp = "https://api.whatsapp.com/send?phone=+5577998385196&text=Ol%C3%A1%2C%20eu%20gostaria%20de%20falar%20sobre%20o%20$modelo%20$estado%2C%20com%20capacidade%20de%20$tamanho%20e%20pretendo%20pagar%20no%20$pagamento%20";
    header("Location: $link_whatsapp");
    exit();
}
?>
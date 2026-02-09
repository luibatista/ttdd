<?php
if (isset($_POST['estado']) && isset($_POST['modelo']) && isset($_POST['tamanho']) && isset($_POST['pagamento'])) {
    
    $estado = htmlspecialchars($_POST['estado']);
    $modelo = htmlspecialchars($_POST['modelo']);
    $tamanho = htmlspecialchars($_POST['tamanho']);
    $pagamento = htmlspecialchars($_POST['pagamento']);
    
    $texto_msg = "Olá, gostaria de falar sobre o $modelo $estado, com capacidade de $tamanho e pretendo pagar no $pagamento.";
    
    $texto_codificado = urlencode($texto_msg);
    
    $link_whatsapp = "https://api.whatsapp.com/send?phone=+5577"NUEMRO DO WHATSAPP"2&text=$texto_codificado";
    
    header("Location: $link_whatsapp");
    exit();
} else {
    header("Location: catalogo.php");
    exit();
}

?>

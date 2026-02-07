<?php
include('dados.php');

$id = $_GET['id'] ?? null;

if (!$id || !isset($produtos[$id])) {
    header("Location: catalogo.php");
    exit;
}

$p = $produtos[$id]; 
$pageTitle = $p['titulo'] . ' - TTDD IPHONES';
include('header.php');
?>
<script src="js/imagens.js" defer></script>

<section class="detalhes-produto">
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2><?php echo strtoupper($p['titulo']); ?></h2>
	</div>

	<div class="container">
        <div class="coluna-visual">
            <div class="breadcrumbs">
                 <a href="index.php">HOME</a>
                 <span>></span>
                 <a href="catalogo.php">CATÁLOGO</a>
                 <span>></span>
                 <a href="#"><?php echo strtoupper($p['titulo']); ?></a>
            </div>
            
            <div style="background-image:url('<?php echo $p['imagens'][0]; ?>');" class="foto-destaque"></div>
            
            <div class="nav-galeria-parent">
                <div class="arrow-left-nav"></div>
                <div class="arrow-right-nav"></div>
                <div class="nav-galeria">
                    <div class="nav-galeria-wraper" style="width: <?php echo count($p['imagens']) * 100; ?>px;">
                        <?php foreach($p['imagens'] as $img): ?>
                            <div class="mini-img-wraper" style="width: 100px;"> <div style="background-image:url('<?php echo $img; ?>');" class="mini-img"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="coluna-opcoes gray">
            <?php if(isset($p['texto_alternativo_preco'])): ?>
                <h2><?php echo $p['texto_alternativo_preco']; ?></h2>
            <?php else: ?>
                <h5>A partir de</h5>
                <h2 id="preco-display">R$<?php echo number_format($p['preco_base'], 2, ',', '.'); ?><strong> em até <?php echo $p['parcelas']; ?>x</strong></h2>
            <?php endif; ?>

            <form action="processar_escolhas.php" method="post">
                <p>Escolha o estado do aparelho:</p>
                <label><input type="radio" name="estado" value="novo" onchange="atualizarPreco()"> Novo (lacrado)</label>
                <label><input type="radio" name="estado" value="seminovo" checked onchange="atualizarPreco()"> Seminovo</label>
                
                <p>Escolha o modelo:</p>
                <?php foreach($p['modelos'] as $key => $modelo): ?>
                    <label>
                        <input type="radio" name="modelo" value="<?php echo $modelo; ?>" <?php echo ($key === 0) ? 'checked' : ''; ?> onchange="atualizarPreco()"> 
                        <?php echo $modelo; ?>
                    </label>
                <?php endforeach; ?>
            
                <p>Escolha o tamanho:</p>
                <?php foreach($p['armazenamento'] as $key => $tam): ?>
                    <label>
                        <input type="radio" name="tamanho" value="<?php echo $tam; ?>" <?php echo ($key === 0) ? 'checked' : ''; ?> onchange="atualizarPreco()"> 
                        <?php echo $tam; ?>
                    </label>
                <?php endforeach; ?>

                <p>Escolha o método de pagamento:</p>
                <label><input type="radio" name="pagamento" value="Boleto"> Boleto</label>
                <label><input type="radio" name="pagamento" value="PIX"> PIX</label>
                <label><input type="radio" name="pagamento" value="Cartão"> Cartão de Crédito</label>

                <button id="venda" class="btn1" type="submit">Enviar Escolha</button>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="destaques-iphone">
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2>Veja Também</h2>
	</div>
	<div class="container">
        <?php 
        foreach($p['destaque_familia'] as $idRelacionado):
            if(isset($produtos[$idRelacionado])):
                $rel = $produtos[$idRelacionado];
        ?>
            <div class="card-iphone">
                <div style="background-image:url('<?php echo $rel['imagens'][0]; ?>');" class="img-iphone"></div>
                <div class="info-iphone">
                    <h2><?php echo $rel['titulo']; ?></h2>
                    <p><?php echo $rel['subtitulo']; ?></p>
                    <a class="btn1" href="detalhes.php?id=<?php echo $idRelacionado; ?>">Mais Detalhes</a>
                </div>
            </div>
        <?php 
            endif;
        endforeach; 
        ?>
	    <div class="clear"></div>
	</div>
</section>

<script>
    const precoBasePHP = <?php echo $p['preco_base']; ?>;

    function atualizarPreco() {
        if (precoBasePHP === 0) return;

        let precoFinal = precoBasePHP;
        
        const estado = document.querySelector('input[name="estado"]:checked').value;
        const modelo = document.querySelector('input[name="modelo"]:checked').value;
        const tamanho = document.querySelector('input[name="tamanho"]:checked').value;

        
        if (estado === 'novo') {
            precoFinal += 400; 
        }
        if (modelo.includes("Pro Max")) {
            precoFinal += 800;
        } else if (modelo.includes("Pro")) {
            precoFinal += 500;
        }

        if (tamanho === '256GB') precoFinal += 200;
        if (tamanho === '512GB') precoFinal += 400;
        if (tamanho === '1TB') precoFinal += 800;

        const display = document.getElementById("preco-display");
        if(display) {
            display.innerHTML = `R$${precoFinal.toFixed(2).replace('.', ',')}<strong> em até <?php echo $p['parcelas']; ?>x</strong>`;
        }
    }
</script>

<?php include('footer.php'); ?>
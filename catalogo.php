<?php 
require_once('dados.php'); 

$pageTitle = 'Catálogo - TTDD IPHONES'; 
include('header.php'); 
?>

<section class="catalogo">
	<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Iphones</h2>
	</div>

    <div class="container">
		<div class="grid-catalogo">

            <?php 
            foreach($produtos as $id_produto => $produto): 
            ?>
                <div class="card-iphone">
                    <div style="background-image:url('<?php echo $produto['imagens'][0]; ?>');" class="img-iphone"></div>
                    
                    <div class="info-iphone">
                        <h2><?php echo $produto['titulo']; ?></h2>
                        <p><?php echo $produto['subtitulo']; ?></p>
                        
                        <a class="btn1" href="detalhes.php?id=<?php echo $id_produto; ?>">Mais Detalhes</a>
                    </div>
                </div>
            <?php endforeach; ?>

		</div><div class="clear"></div>
    </div></section>

<div>
	<h2 id="nem">Não encontrou o modelo que procurava? Entre em contato!</h2>
	<a id="nemb" class="btn1" href="https://api.whatsapp.com/send?phone=+5577998385196">Falar no WhatsApp</a>
</div>

<?php include('footer.php'); ?>
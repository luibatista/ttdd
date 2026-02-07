<footer>
	<div class="container">
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="catalogo.php">Catálogo</a></li>
			<li><a href="sobre.html">Sobre</a></li>
			<li><a href="contato.html">Contato</a></li>
		</ul>
	</nav>
	<p>Todos os direitos reservados - TTDD iPhones</p>
	<div class="clear"></div>
	</div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var imagens = document.querySelectorAll('.mobile');
    var lista = document.querySelector('.nav');

    imagens.forEach(function(imagem) {
        imagem.addEventListener('click', function() {
            if (lista.style.display === 'none' || lista.style.display === '') {
                 lista.style.display = 'block';
            } else {
                lista.style.display = 'none';
            }
        });
    });
});
</script>
</body>
</html>
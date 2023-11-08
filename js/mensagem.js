document.addEventListener('DOMContentLoaded', function() {
    var imagem = document.getElementById('../imagens/icon_menu.png');
    var lista = document.querySelector('.mobile');

    imagem.addEventListener('click', function() {
        if (lista.style.display === 'none') {
            lista.style.display = 'block';
        } else {
            lista.style.display = 'none';
        }
    });
});

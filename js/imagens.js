document.addEventListener('DOMContentLoaded', function() {
    const fotoDestaque = document.querySelector('.foto-destaque');
    const miniImgs = document.querySelectorAll('.mini-img');

    let currentImageIndex = 0;

    function showImage(index) {
        miniImgs[currentImageIndex].classList.remove('active');
        miniImgs[index].classList.add('active');
        fotoDestaque.style.backgroundImage = miniImgs[index].style.backgroundImage;
        currentImageIndex = index;
    }

    document.querySelector('.arrow-left-nav').addEventListener('click', function() {
        const newIndex = (currentImageIndex - 1 + miniImgs.length) % miniImgs.length;
        showImage(newIndex);
    });

    document.querySelector('.arrow-right-nav').addEventListener('click', function() {
        const newIndex = (currentImageIndex + 1) % miniImgs.length;
        showImage(newIndex);
    });

    miniImgs.forEach(function(miniImg, index) {
        miniImg.addEventListener('click', function() {
            showImage(index);
        });
    });
});
$(document).ready(function () {
    // inicializar dropdown
    $('.ui.dropdown').dropdown();
    // inicializar tabulares
    $('.menu .item').tab()
    // setInterval(() => {
        carruselAliados()
    // }, 2000);
});

/**
 * Pemite moverse hasta una seccion en especifico
 * @param {string} hash 
 */
function moveSection(hash) {
    let position = ($(hash).offset().top - 10);
    $('html, body').animate({
        scrollTop: position
    }, 2000)
}

/**
 * Permite inicializar el carruse de los aliados
 */
function carruselAliados() {
    $('.aliados').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        speed: 300,
        arrows: true,
        prevArrow: '.btn-carrusel-aliado.btn-left',
        nextArrow: '.btn-carrusel-aliado.btn-right',
        slidesToShow: 4,
        adaptiveHeight: true,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}


$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;

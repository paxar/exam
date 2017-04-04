$(document).ready(function () {
    $('#close-nav').click(function () {
        $('.navigation').slideUp(300);
        $('#open-nav').removeClass("remove-btn");
        $('#close-nav').addClass("remove-btn")
    });

    $('#open-nav').click(function () {
        $('.navigation').slideDown(300);
        $('#close-nav').removeClass("remove-btn");
        $('#open-nav').addClass("remove-btn")
    });


    $('#1').slick({
        infinite: true,
        speed: 350,  // определяем скорость перелистывания
        arrows: true,
        dots: true,
        slidesToShow: 4,  //количество слайдов для показа
        slidesToScroll: 2,  //сколько слайдов за раз перелистнется
        responsive: [
            {
                breakpoint: 600, //сообщает, при какой ширине экрана нужно включать настройки
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true
                }
            }
        ]
    });



});
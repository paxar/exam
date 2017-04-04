<div class="slick-slider">
    <div>Слайд1</div>
    <div> Слайд2</div>
    <div> Слайд3</div>
</div>

$('.slick-slider').slick({
infinite: false,
speed: 350,
// определяем скорость перелистывания
slidesToShow: 4,
//количество слайдов для показа
slidesToScroll: 2,
//сколько слайдов за раз перелистнется
responsive: [
{
breakpoint: 600,
//сообщает, при какой ширине экрана нужно включать настройки
settings: {
slidesToShow: 2,
slidesToScroll: 1,
infinite: true,
}
}
]
});


Параметр	         Тип	     Default	    Описание
adaptiveHeight	    boolean  	false	Включает адаптирование высоты для одиночкного слайда горизонтальной карусели
autoplay	         boolean	false	Автоматическая прокрутка
autoplaySpeed	     int(ms)	3000	Скорость автопрокрутки в милисекундах
arrows	             boolean	true	Показ/скрытие навигационных кнопок
prevArrow	         html	button	Замена стандартной кнопки Preview
nextArrow	         html	button	Замена стандартной кнопки Next
dots	             boolean	false	Показ/скрытие навигационных точек под слайдером
draggable	         boolean	true	Включает/выключает способность перелистывания слайдера перетаскиванием мышью
fade	             boolean	false	Эффект затухания при перелистывании слайдов
focusOnSelect	     boolean	false	Устанавливает фокус на выбранный элемент карусели при клике
easing	             string	'linear'	Анимационные эффекты перехода, их набор зависит от подключенных jQuery Easing плагинов
edgeFriction	     integer	0.15	Сопротивление при попытки прокрутить карусель, когда дальше нет слайдов и она не зацилена
infinite	         boolean	true	Бесконечное прокручивание (зацикливание)
initialSlide	     integer	0	Номер слайда, с которого начинать показ
lazyLoad	         string	'ondemand'	Тип подгрузки слайдов. Принимает 'ondemand' или 'progressive'
pauseOnHover	     boolean	true	Пауза автопроигрывания при наведении мыши
pauseOnDotsHover	 boolean	false	Пауза автопроигрывания при наведении мыши на навигационные точки
pauseOnHover	     boolean	true	Пауза автопроигрывания при наведении мыши
rows	             int	1	Может быть 'window', 'slider' или 'min'
infinite	         boolean	true	Бесконечная прокрутка

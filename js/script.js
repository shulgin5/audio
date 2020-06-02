//Инициализация слайдера вопросов
var swiper = new Swiper('.swiper-container',{
  touchRatio: 0,
});
var topPixels = $(window).height()/2.3;
$('.row-slider').css('margin-top',topPixels);
var countSlides = 3;
var nextQuestionButton = $('.next-question');

nextQuestionButton.click(function() {
  if (swiper.isEnd) {
    alert('Конец');
  }
  if (swiper.activeIndex == 1) {
    swiper.slideNext();
    nextQuestionButton.html('Готово!');
  } else {
    swiper.slideNext();
  } 
});
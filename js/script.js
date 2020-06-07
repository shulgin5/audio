//Инициализация слайдера вопросов
var quest = $('.quest');
var swiper = new Swiper('.swiper-container',{
  touchRatio: 0,
});
var topPixels = $(window).height()/3;
$('.row-slider').css('margin-top',topPixels);
var countSlides = 3;
var nextQuestionButton = $('.next-question');

nextQuestionButton.click(function() {
  if (swiper.isEnd) {
    quest.css('display','none');
    swal("Спасибо за прохождение опроса!", "Мы дарим Вам скидку 50% на беспроводные наушники IFans", "success");

  }
  if (swiper.activeIndex == 1) {
    swiper.slideNext();
    nextQuestionButton.html('Готово!');
  } else {
    swiper.slideNext();
  } 
});
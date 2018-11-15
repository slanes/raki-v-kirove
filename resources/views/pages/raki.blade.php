@extends('template.layouts.base')
@section('title', 'Раки')


@section('content')
<div class="content">
   <h1>Вареные и живые раки в Краснодаре</h1>
   <p>Вкуснейшие вареные раки в Краснодаре теперь доступны с доставкой на дом. Мы не знаем, есть ли лучшее лакомство под ароматное пиво и хорошую компанию. В нашем каталоге представлены живые раки — и цена вас поразит. Только самые выгодные решения для искушенных покупателей: маленькие, средние и крупные особи — выбирайте любой вариант. А для удобства выбора предоставлены фото живых раков. Вы поразитесь высокому качеству нашей продукции. Ищете, где можно купить живых раков в Краснодаре в розницу и оптом? Только на нашей площадке вы получите все, что искали. До того как попасть к вам на стол, эти деликатесы обитали в лучших реках нашей страны.</p>
     <div class="catalog">
		@include('template.layouts.components.collectionsRaki')
     </div>
</div>


<div class="content">
    <h2>Живые раки с доставкой по Краснодару</h2>
<p>Только у нас живые раки оптом в Краснодаре — доставляем очень быстро, упаковываем тщательно. А если есть какие-то вопросы, с радостью ответим на них, поможем подобрать количество продукта в зависимости от размеров застолья. Порадуйте себя, своих родственников и гостей настоящими русскими изысками отменного качества. Только у нас живые раки в Краснодаре недорого — следите за ценой, ведь она время от времени снижается. Но и без этого стоимость нашей продукции невысокая — она полностью соответствует обозначенному качеству. Так что если нужно недорого и без претензий к обслуживанию — это к нам: живые раки в Краснодаре заказываются именно здесь!</p>
<div class="center">
      <div class="h"></div>

   <div class="div1">
      <img src="img/icon-priemushestva-6.png" alt="вкусная варка раков">
      <p>Качественная и вкусная варка раков</p>
   </div>
   <div class="div1">
      <img src="img/icon-priemushestva-2.png" alt="Прекрасное отношение к клиенту">
      <p>Прекрасное отношение к каждому клиенту</p>
   </div>
   <div class="div1">
      <img src="img/group-3.png" alt="цены">
      <p>Наши цены приятно удивят вас</p>
   </div>
   <div class="div1">
      <img src="img/beer.png" alt="изюминка">
      <p>У нас есть такая изюминка как ледяные пивные бокалы</p>
   </div>
   <div class="div1">
      <img src="img/icon-priemushestva-4.png" alt="Цена">
      <p>Цена за живого и сваренного
         рака единая
      </p>
   </div>
   <div class="div1">
      <img src="img/icon-priemushestva-1.png" alt="прямые поставки">
      <p>Имеем прямые поставки рака</p>
   </div>
   </div>
</div>

	<div class="h"></div>
<div class="bg_form">
   <div class="content">
      <div class="form_raki">
         <h2>Бесплатная доставка раков от 3 кг</h2>
<p>Нужны живые раки оптом? Это лучшее решение, потому что от 3 кг мы доставляем продукцию абсолютно бесплатно. Вот почему наш магазин так любят люди, организовывающие посиделки с друзьями, различные мероприятия, корпоративные вечера. Можно купить живых раков под любой праздник.</p>
         <div class="form_bg" id="banner_form">
          <div class="form">
            <form class="callback" action="https://glav-rak.ru/">
               <input type="hidden" name="subject" value="Заявка со страницы Раки">
               <input class="validate" type="text" name="name" placeholder="Ваше имя*">
               <input class="phone_input validate" type="tel" name="phone" placeholder="Ваш телефон*">
               <input type="submit" class="submit" onclick="yaCounter45934236.reachGoal('form_banner'); return true;" value="Перезвоните мне">
            </form>
         </div>
         <div class="thank">
         </div>
         <p class="p">Нажимая кнопку "Перезвоните мне" вы соглашаетесь с <a rel="nofollow" target="_blank" class="yellow" href="https://glav-rak.ru/politika-konfidentsialnosti">политикой конфиденциальности</a></p>
      </div>
      </div>
   </div>
</div>

	@include('template.layouts.components.callback')
@endsection
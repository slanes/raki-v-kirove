@extends('template.layouts.mainPage')
@section('title', 'Главная стран')


@section('content')
<div class="company">
	<img src="img/raki.png" alt="Раки">
	<img src="img/rakipivo.jpg" alt="Главрак магазин">
	<div class="text">
		<h2>О нашей раковой «{{config('information.company')}}»</h2>
		<p>Мы всегда рады видеть вас в нашем заведении «{{config('information.company')}}». У нас вы можете купить раков в Краснодаре по цене, которая вам понравится. Их мясо оказывает полезное влияние на здоровье человека, содержит полезные аминокислоты и имеет неповторимый вкус. Еще мы предлагаем вкуснейшее пиво – приходите по адресу Суворова 127 и попробуйте его из ледяных бокалов. Наши предложения полностью соответствуют желаниям и ожиданиям посетителей – мы специально отобрали несколько сортов лучшего пива и предлагаем его по адекватной цене.</p>
		<div class="h"></div>
		<span class="span">Адрес:</span>
		<p class="address">{{config('information.fullAddress')}}</p>
		<a href="/contacts" class="yellow">посмотреть на карте</a>
	</div>
</div>

<div class="content center">
	<h2>Наши преимущества:</h2>
	<p>Если вы задались вопросом, где можно вкусно поесть, заходите. Наши повара готовят только качественно и вкусно. Отношение к клиентам позитивное – посетители всегда возвращаются. У нас вы можете купить раков в Краснодаре недорого – цены у нас всегда приемлемые. В ассортименте есть холодное пиво в ледяных бокалах. А еще вы можете купить живых раков – как оптом, так и в розницу.</p>
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


<div class="h"></div>
<div class="bg_1">
    <div class="content">
        <div class="center">
            <h2>Ассортимент раков</h2>
            <p>У нас можно купить раков разных размеров. Есть маленькие – «пивные», которые прекрасно подходят для больших компаний, их много, а стоят недорого. Самый популярный вариант средний – тут уже немало мяса, а вкус отличный. Есть и крупные – это отличный выбор для какого-нибудь торжественного мероприятия. И лучший вариант – отборные, прекрасно подходят для значимого праздника. Поэтому звоните или оставляйте заявку на <a class="a" href="/dostavka">доставку раков в Кирове</a>.</p>
        </div>
        <div class="h2"></div>
        @include('template.layouts.components.collectionsRaki')
    </div>
</div>


<div class="h"></div>
      <div class="content">
         <div class="center">
            <h2>Можем бесплатно сварить для вас раков</h2>
            <p>Если вы заинтересовались тем, где дешево купить раков в Краснодаре, приходите, мы снизим расходы до минимума. Блюда варим бесплатно по нескольким рецептам. Есть классика – с укропом, солью и черным перцем, ничего лишнего. Наш фирменный метод – с солью, красным перцем, укропом и чесноком. И еще один вариант – по фен-шую, когда в блюдо добавляют перец горошком, помидоры и морковь.</p>
         </div>
         <div class="h2"></div>
         <div class="tovar recept">
            <img src="img/group-3-1.png" alt="Классический рецепт">
            <span class="name">Классический рецепт</span>
            <p class="pre">Черный перец
               Укроп
               Соль
            </p>
            <div class="price">цена: <b>бесплатно</b></div>
         </div>
         <div class="tovar recept">
            <img src="img/group-3-copy.png" alt="Фирменный рецепт">
            <span class="name">Фирменный рецепт</span>
            <p class="pre">Укроп
               Соль
               Чеснок
               Красный перец
            </p>
            <div class="price">цена: <b>бесплатно</b></div>
         </div>
         <div class="tovar recept">
            <img src="img/group-3-copy-2.png" alt="Рецепт по финшую">
            <span class="name">Рецепт по фен-шую</span>
            <p class="pre">Укроп
               Соль
               Перец горошек
               Помидор
               Морковь
            </p>
            <div class="price">цена: <b>бесплатно</b></div>
         </div>
      </div>


      <div class="h2"></div>
      <div class="h"></div>

      <div class="content">
         <div class="form_bg" id="dostavka_form">
            <h2>Бесплатная доставка раков от 3кг</h2>
            <p>Продажа раков у нас сопровождается доставкой, причем бесплатной. Главное – сделать заказ весом от 3 килограммов. Не задумывайтесь над тем, где купить раков, достаточно указать свое имя, номер телефона и нажать кнопку заказа. Доступны оптовые закупки для всех желающих. Купить в Краснодаре свежих раков от «{{config('information.company')}}» – сделать правильный выбор.</p>
            <div class="h"></div>
            <div class="form">
               <form class="callback" action="index.html">
                  <input type="hidden" name="subject" value="Бесплатная доставка раков">
                  <input class="validate" type="text" name="name" placeholder="Ваше имя*">
                  <input class="phone_input validate" type="tel" name="phone" placeholder="Телефон*">
                  <input type="submit" class="submit" onclick="yaCounter45934236.reachGoal('form_dostavka'); return true;" value="Заказать раков">
                  <p class="p">Нажимая кнопку "Заказать раков" вы соглашаетесь с <a rel="nofollow" target="_blank" class="yellow" href="/politika-konfidentsialnosti">политикой конфиденциальности</a></p>
               </form>
            </div>
            <div class="thank">
            </div>
         </div>
         <img class="rak" src="img/invalid-name.png" alt="Купить раков в Краснодаре">
      </div>


      <div class="company_text">
         <div class="info">
            <div class="map">
               <iframe src="https://yandex.ru/map-widget/v1/-/CBUfqKUZ-B" ></iframe>
            </div>
            <div class="about_company">
               <h2>О нашей компании «{{config('information.company')}}»</h2>
               <p>Наша компания занимается продажей раков в Краснодаре, каждый день доставляя радость всем клиентам. У нас – очень удобная система заказа по телефону и через сайт. Если у вас есть возможность посетить наше заведение, чтобы купить в Краснодаре раков дешево, мы будем рады видеть любого посетителя. Мы экономим ваше время и быстро варим вкусные блюда. Клиенты всегда отмечают оперативность наших сотрудников и неповторимый вкус предлагаемых закусок. Продажа раков в Краснодаре по ценам, которые произведут на вас приятное впечатление, делает всех наших посетителей счастливее.</p>
               <a href="/company" class="more">Подробнее о нас</a>
            </div>
         </div>
      </div>


      @include('template.layouts.components.callback')
@endsection
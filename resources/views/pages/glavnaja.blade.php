@extends('template.layouts.mainPage')
@section('title', 'Главная стран')


@section('content')
<div class="company">
	<img src="img/raki.png" alt="Раки">
	<img src="img/rakipivo.jpg" alt="Главрак магазин">
	<div class="text">
		<h2>О нашей раковой «{{config('information.company')}}»</h2>
		<p>Мы всегда рады видеть вас в нашем заведении «{{config('information.company')}}». У нас вы можете купить раков в Кирове по цене, которая вам понравится. Их мясо оказывает полезное влияние на здоровье человека, содержит полезные аминокислоты и имеет неповторимый вкус.</p>
		<div class="h"></div>
		<span class="span">Адрес:</span>
		<p class="address">{{config('information.fullAddress')}}</p>
		<a href="/contacts" class="yellow">посмотреть на карте</a>
	</div>
</div>

<div class="content center">
	<h2>Наши преимущества:</h2>
	<p>Если вы задались вопросом, где можно вкусно поесть, заходите. Наши повара готовят только качественно и вкусно. Отношение к клиентам позитивное – посетители всегда возвращаются. У нас вы можете купить раков в Кирове недорого – цены у нас всегда приемлемые. А еще вы можете купить живых раков – как оптом, так и в розницу.</p>
	@include('template.layouts.components.advantages')
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
            <p>Если вы заинтересовались тем, где дешево купить раков в Кирове, приходите, мы снизим расходы до минимума. Блюда варим бесплатно по нескольким рецептам. Есть классика – с укропом, солью и черным перцем, ничего лишнего. Наш фирменный метод – с солью, красным перцем, укропом и чесноком. И еще один вариант – по фен-шую, когда в блюдо добавляют перец горошком, помидоры и морковь.</p>
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
            <p>Продажа раков у нас сопровождается доставкой, причем бесплатной. Главное – сделать заказ весом от 3 килограммов. Не задумывайтесь над тем, где купить раков, достаточно указать свое имя, номер телефона и нажать кнопку заказа. Доступны оптовые закупки для всех желающих. Купить в Кирове свежих раков от «{{config('information.company')}}» – сделать правильный выбор.</p>
            <div class="h"></div>
            <div class="form">
               <form class="callback">
                  <input type="hidden" name="subject" value="Бесплатная доставка раков">
                  <input class="validate" type="text" name="name" placeholder="Ваше имя*">
                  <input class="phone_input validate" type="tel" name="phone" placeholder="Телефон*">
                  <input type="submit" class="submit" value="Заказать раков">
                  <p class="p">Нажимая кнопку "Заказать раков" вы соглашаетесь с <a rel="nofollow" target="_blank" class="yellow" href="/politika-konfidentsialnosti">политикой конфиденциальности</a></p>
               </form>
            </div>
            <div class="thank">
            </div>
         </div>
         <img class="rak" src="img/invalid-name.png" alt="Купить раков в Кирове">
      </div>


      <div class="company_text">
         <div class="info">
            <div class="map">
               <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa277b226a88655bd52206e398d0c1c8376f1dca66e1ee51e06beefb4254e2669&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
            </div>
            <div class="about_company">
               <h2>О нашей компании «{{config('information.company')}}»</h2>
               <p>Наша компания занимается продажей раков в Кирове, каждый день доставляя радость всем клиентам. У нас – очень удобная система заказа по телефону и через сайт. Если у вас есть возможность посетить наше заведение, чтобы купить в Кирове раков дешево, мы будем рады видеть любого посетителя. Мы экономим ваше время и быстро варим вкусные блюда. Клиенты всегда отмечают оперативность наших сотрудников и неповторимый вкус предлагаемых закусок. Продажа раков в Кирове по ценам, которые произведут на вас приятное впечатление, делает всех наших посетителей счастливее.</p>
               <a href="/company" class="more">Подробнее о нас</a>
            </div>
         </div>
      </div>


      @include('template.layouts.components.callback')
@endsection
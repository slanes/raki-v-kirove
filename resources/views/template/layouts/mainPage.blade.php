@extends('template.layouts.blocks.skeleton')

@section('main')
	<div id="cap">
		@section('header-content')
			<div class="content">
				<div class="text_banner_home">
					<h1>Живые и вареные раки с доставкой по Кирову</h1>
					<p>Вареные раки – это традиционная русская закуска к хорошему пенному пиву. Стоит только попробовать – и вы поймете, что никакие чипсы не сравнятся с этой закуской. Мы предлагаем вам купить раков в Кирове, приготовленных нашими поварами в лучших традициях отечественной кухни. Яркий вкус и потрясающий аромат оставят у вас только приятные впечатления.</p>
					<div class="form_bg" id="banner_form">
						<div class="form">
							<form class="callback">
								<input type="hidden" name="subject" value="Заявка со страницы Главная">
								<input class="validate" type="text" name="name" placeholder="Ваше имя*">
								<input class="phone_input validate" type="tel" name="phone" placeholder="Ваш телефон*">
								<input type="submit" class="submit" value="Перезвоните мне">
							</form>
						</div>
						<div class="thank"></div>
						<p class="p">Нажимая кнопку "Перезвоните мне" вы соглашаетесь с <a rel="nofollow" target="_blank" class="yellow" href="https://glav-rak.ru/politika-konfidentsialnosti">политикой конфиденциальности</a></p>
					</div>
				</div>
			</div>
		@endsection
		@include('template.layouts.blocks.header')
	</div>

	@yield('content')

@endsection
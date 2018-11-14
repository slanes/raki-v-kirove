<div class="h2"></div>
<div class="footer">
  <div class="content">
	<div class="table">
	  <div class="td_footer">
		<div class="footer_menu">
		  @include('template.menu')
		</div>
	  </div>
	  <div class="td_footer">
		<p>Всегда в наличии живые раки<br>Заказы принимаем<br>Круглосуточно!</p>
		<a href="/politika-konfidentsialnosti" rel="nofollow" class="a_fff">Политика конфиденциальности</a>
	  </div>
	  <div class="td_footer">
		<p>Если после заказа на сайте вам не перезвонили в течение 30 минут, звоните!</p>
		<div class="metrika"></div>
	  </div>
	  <div class="td_footer last">
	   <p>{{ config('information.fullAddress') }}</p>
	   <a href="tel:{{ config('information.noFormatedPhone') }}" rel="nofollow" class="phone">{{ config('information.formatedPhone') }}</a>
	   <span class="call" onclick="box('call');">Заказать звонок</span>
	   <div class="network">
		@include('template.network')
	  </div>
	</div>
  </div>
</div>
</div>
<div class="footer_bottom">
  <div class="content">
	<div class="copy"><?=date('Y')?> © «Раки в Кирове» Все права защищены</div>
	<div class="staputov"><span>Создание и продвижение сайтов в </span> <a target="_blank" rel="nofollow" href="https://slanes.ru/"> Studio Slanes</a></div>
  </div>
</div>


		@include('template.forms.callback')
		@include('template.forms.orderRaki')



		<script type="text/javascript">
			window.onload = function() {
    			$(".phone_input").mask("+7 (999) 999-99-99");
				jQuery(document).ready(function($){$('#nav-wrap').prepend('<div id="menu-icon">&equiv;</div>');$("#menu-icon").on("click",function(){$("#nav").slideToggle();$(this).toggleClass("active_icon")})});
				$('.owl_tovar').owlCarousel({items:4,loop:true,margin:30,controlNav:true,responsive:{0:{items:1},600:{items:2},900:{items:3},1270:{items:4}}});$('.owl').owlCarousel({items:4,loop:true,margin:15,controlNav:true,responsive:{0:{items:1},500:{items:2},800:{items:3},900:{items:4}}});
  			};
			function box(id) {
			    display = document.getElementById(id).style.display;
			    if (display == 'none') {
			        document.getElementById(id).style.display = 'block'
			    } else {
			        document.getElementById(id).style.display = 'none'
			    }
			}
		</script>
	</body>
</html>
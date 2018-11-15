<ul>
	<?php
		$menuItems = [
			'raki' => 'Раки',
			//'recepty' => 'Рецепты',
			//'otzyvy' => 'Отзывы',
			'dostavka' => 'Доставка',
			'kontakty' => 'Контакты',
		];
		$routeName = \Request::route()->getName();

		foreach ($menuItems as $url => $name):
			$isActive = false;
			$class = '';
			if($url == 'raki') $class .= ' first ';
			if($url == 'kontakty')	$class .= ' last ';
		if($routeName == $url)	{
			$class .= ' active ';
			$isActive = true;
		}
	?>
	<li class="<?=$class?>">
		<?if(!$isActive):?>
			<a href="/<?=$url?>"><?=$name?></a>
		<?else:?>
			<span><?=$name?></span>
		<?endif?>
	</li>
<?endforeach?>
</ul>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>@yield('title')</title>
    <meta name="description" content="Живые и вареные раки с доставкой по Краснодару. Вы находитесь в разделе: Контакты.">
    <meta name="keywords" content="Контакты">
    <meta name="robots" content="index, follow"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="cap">
        <div class="content">
            <div class="network">
                @include('template.network')
            </div>
            <div class="right_info">
                <p>Время работы: {{config('information.worktime')}}</p>
                <span onclick="box('call');">Заказать звонок</span>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="content table" itemscope itemtype="http://webmaster.yandex.ru/vocabularies/term-def.xml">
            <div class="logo td">
                <a href="https://glav-rak.ru/">
                  <img src="img/logo.png" alt="Раковая ГлавРак">
                </a>
               </div>
            <div class="menu td">
              <div id="nav-wrap">
                <div class="menu_cap" id="nav">
                  @include('template.menu')
                </div>
              </div>
            </div>
            <div class="top_info td">
              <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                г. <span itemprop="addressLocality">{{config('information.addressLocality')}}</span>,
                <span itemprop="streetAddress"> {{config('information.streetAddress')}}</span>
              </p>
              <a href="tel:{{config('information.noFormatedPhone')}}" itemprop="telephone"  rel="nofollow">{{ config('information.formatedPhone') }}</a>
            </div>
        </div>
    </div>
    {{Breadcrumbs::render()}}
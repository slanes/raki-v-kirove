@extends('template.layouts.base')
@section('title', 'Контакты')

@section('content')
<div class="content">
   <div class="contacts" itemscope itemtype="http://schema.org/Organization">
      <h1>Наши контакты</h1>
      <div class="header" itemprop="name">Компания «{{config('information.company')}}»</div>
      <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
         <span>Адрес: </span> г.
         <span itemprop="addressLocality">{{config('information.addressLocality')}}</span>,
         <span itemprop="streetAddress">{{config('information.streetAddress')}}</span>
      </p>
      <p><span>Телефон: </span>
          <a rel="nofollow" class="phone_contacts" itemprop="telephone"  href="tel:{{config('information.noFormatedPhone')}}">{{ config('information.formatedPhone') }}</a>
      </p>
      <p><span>Время работы: </span> Круглосуточно!</p>
      <p><span>Email:</span>  <a rel="nofollow" itemprop="email"  href="mailto:{{config('information.email')}}" class="yellow">{{config('information.email')}}</a></p>
   </div>
   <div class="contacts">
      <iframe src="https://yandex.ru/map-widget/v1/-/CBUfqKUZ-B" ></iframe>
      </div>
</div>
@endsection
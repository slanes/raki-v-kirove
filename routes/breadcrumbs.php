<?php

// Главная
Breadcrumbs::for('glavnaja', function ($trail) {
    $trail->push('Главная', route('glavnaja'));
});

// Главная > Раки
Breadcrumbs::for('raki', function ($trail) {
    $trail->parent('glavnaja');
    $trail->push('Раки', route('raki'));
});

// Главная > Доставка
Breadcrumbs::for('dostavka', function ($trail) {
    $trail->parent('glavnaja');
    $trail->push('Доставка', route('dostavka'));
});

// Главная > Контакты
Breadcrumbs::for('kontakty', function ($trail) {
    $trail->parent('glavnaja');
    $trail->push('Контакты', route('kontakty'));
});

// Главная > Политика конфиденциальности
Breadcrumbs::for('politika-konfidentsialnosti', function ($trail) {
    $trail->parent('glavnaja');
    $trail->push('Политика конфиденциальности', route('politika-konfidentsialnosti'));
});
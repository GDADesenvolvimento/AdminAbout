# GDA Admin - About

## Instruções

Esse pacote é para adicionar a função About(Sobre) na aplicação GDA Admin

## Instalação

Rode: composer require gda/about

Adicione o seguinte service provider em seu arquivo config/app.php:

```php
'providers' => [
    //...
    \GdaDesenv\GdaAbout\Providers\GdaAboutServiceProvider::class
]
```

Adicione o seguinte código ao arquivo resources/views/sidebar.blade.php:

```php
<li class="{{ setActiveMenu('about') }}">
  <a href="{{route('about')}}">
    <i class="fa fa-info-circle"></i> <span>Sobre</span>
  </a>
</li>
```

Rode o seguinte comando no artisan:

```bash
php artisan vendor:publish
```

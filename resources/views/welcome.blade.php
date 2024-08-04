<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Фотогалерея</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div
  class="w-screen h-screen flex gap-4 items-center justify-center bg-gray-50 text-black/50 dark:bg-gray-950 dark:text-white/50">
  @if (Route::has('login'))
    @auth
      <a href="{{ url('/gallery') }}"
         class="cursor-pointer focus:outline-none focus-visible:outline-0 flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 px-2.5 py-1.5 shadow-sm text-white dark:text-gray-900 bg-gray-900 hover:bg-gray-800 dark:bg-white dark:hover:bg-gray-100 focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-gray-500 dark:focus-visible:ring-gray-400 inline-flex items-center">
        Фотогалерея
      </a>
    @else
      <a href="{{ url('/login') }}"
         class="cursor-pointer focus:outline-none focus-visible:outline-0 flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 px-2.5 py-1.5 shadow-sm text-white dark:text-gray-900 bg-gray-900 hover:bg-gray-800 dark:bg-white dark:hover:bg-gray-100 focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-gray-500 dark:focus-visible:ring-gray-400 inline-flex items-center">
        Авторизоваться
      </a>
      @if (Route::has('register'))
        <a href="{{ url('/register') }}"
           class="cursor-pointer focus:outline-none focus-visible:outline-0 flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 px-2.5 py-1.5 shadow-sm text-white dark:text-gray-900 bg-gray-900 hover:bg-gray-800 dark:bg-white dark:hover:bg-gray-100 focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-gray-500 dark:focus-visible:ring-gray-400 inline-flex items-center">
          Зарегистрироваться
        </a>
      @endif
    @endauth
  @endif
</div>
</body>
</html>

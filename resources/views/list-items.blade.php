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
  class="w-screen flex gap-4 items-center justify-center bg-gray-50 text-black/50 dark:bg-gray-950 dark:text-white/50">
  <div class="flex flex-col max-w-3xl">
    @foreach($galleries as $gallery)
      <div>
        <h3>{{$gallery->name }}</h3>

        <div class="grid grid-cols-3 gap-2">
          @foreach($gallery->images as $img_col)
            <div class="grid gap-2">
              @foreach($img_col as $img)
                <div>
                  <img class="h-auto max-w-full rounded-lg" src="/images/{{$img->image}}" alt="">
                </div>
              @endforeach
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</div>
</body>
</html>

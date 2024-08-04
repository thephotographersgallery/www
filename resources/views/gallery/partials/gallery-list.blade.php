<section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Моя галерея') }}
    </h2>
  </header>
  <div class="mt-4 space-y-2">
    @foreach($galleries as $gallery)
      <a href="{{ url('gallery', [$gallery->id]) }}"
         class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
        <h5 class="text-2xl font-bold tracking-tight text-gray-900">{{ $gallery->name }}</h5>
        <p class="font-normal text-gray-700"></p>
      </a>
    @endforeach
  </div>
</section>

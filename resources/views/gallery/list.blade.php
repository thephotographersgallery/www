<x-app-layout>
  @include('gallery.partials.header')

  <div class="bg-white shadow sm:rounded-lg p-4">
    @include('gallery.partials.new-gallery-form')
  </div>
  <div class="bg-white shadow sm:rounded-lg p-4">
    @include('gallery.partials.gallery-list')
  </div>
</x-app-layout>

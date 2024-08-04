<nav class="w-screen bg-red-200">
  <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200">
    <div class="grid h-full max-w-3xl grid-cols-2 mx-auto font-medium">
      <x-nav-link :href="route('gallery.index')" :active="request()->routeIs('gallery.index')">
        <x-phosphor-house class="w-8 h-8 mb-1 group-hover:text-black"/>
        <span class="text-sm group-hover:text-black">Галерея</span>
      </x-nav-link>
      <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
        <x-phosphor-user class="w-8 h-8 mb-1 group-hover:text-black"/>
        <span class="text-sm group-hover:text-black">Профиль</span>
      </x-nav-link>
    </div>
  </div>
</nav>


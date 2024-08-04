<div class="max-w-3xl mx-auto px-4 flex justify-between items-center mb-4">
  <div class="text-gray-900">
    {{ Auth::user()->name }}
  </div>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"
       class="cursor-pointer focus:outline-none focus-visible:outline-0 flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 px-2.5 py-1.5 shadow-sm text-white  bg-gray-900    focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-gray-500 dark:focus-visible:ring-gray-400 inline-flex items-center">
      Выйти
    </a>
  </form>
</div>

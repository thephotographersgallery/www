<section class="space-y-2">
  <div class="w-full relative overflow-hidden rounded-lg p-2 bg-green-500 text-white">
    <div class="flex gap-1 items-start">
      <x-phosphor-warning class="w-10 h-10"/>
      <div class="w-0 flex-1">
        <p class="text-sm font-medium">Внимание</p>
        <div class="mt-1 text-sm leading-4 opacity-90">В Бета-версии данного сайт можно создать только три галереей.</div>
      </div>
    </div>
  </div>
  @if(count($galleries) >= 3)
    <div
      class="mb-2 cursor-not-allowed flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 px-2.5 py-1.5 shadow-sm text-white bg-gray-700 block text-center">
      Создать галерею ({{count($galleries)}} из 3)
    </div>
  @else
    <a
      x-data=""
      x-on:click.prevent="$dispatch('open-modal', 'create-galley')"
      class="mb-2 cursor-pointer focus:outline-none focus-visible:outline-0 flex-shrink-0 font-medium rounded-md text-sm gap-x-1.5 px-2.5 py-1.5 shadow-sm text-white bg-gray-900 focus-visible:ring-inset focus-visible:ring-2 focus-visible:ring-gray-500 dark:focus-visible:ring-gray-400 block text-center">
      Создать галерею ({{count($galleries)}} из 3)
    </a>
  @endif

  <x-modal name="create-galley" :show="$errors->galleryCreate->isNotEmpty()" focusable>
    <form method="post" action="{{ route('gallery.create') }}" class="p-6">
      @csrf
      @method('post')

      <h2 class="text-lg font-medium text-gray-900">
        {{ __('Введите название мероприятия') }}
      </h2>

      <div class="mt-6">
        <x-input-label for="name" value="{{ __('Мероприятия') }}" class="sr-only"/>

        <x-text-input
          id="name"
          name="name"
          type="text"
          class="mt-1 block w-3/4"
          placeholder="{{ __('Мероприятия') }}"
        />
        <x-input-error :messages="$errors->galleryCreate->get('name')" class="mt-2"/>
      </div>

      <div class="mt-6 flex justify-end">
        <x-secondary-button x-on:click="$dispatch('close')">
          {{ __('Отмена') }}
        </x-secondary-button>
        <x-primary-button class="ms-3">{{ __('Сохранить') }}</x-primary-button>
      </div>
    </form>
  </x-modal>
</section>

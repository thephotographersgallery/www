<x-app-layout>
  @include('gallery.partials.header')
  <div class="space-y-4">
    <div class="bg-white shadow sm:rounded-lg p-4">
      <div class="flex items-center gap-4">
        <x-secondary-button>
          <a href="/gallery">Назад</a>
        </x-secondary-button>
        <div>{{$gallery->name}}</div>
      </div>
    </div>
    <div class="bg-white shadow sm:rounded-lg p-4">


      {{--      <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data"--}}
      {{--            class="flex flex-col justify-center w-full gap-2">--}}
      {{--        @csrf--}}
      {{--        <input type="hidden" name="gallery_id" value="{{$gallery->id}}">--}}
      {{--        <label for="inputImage"--}}
      {{--               class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">--}}
      {{--          <div class="flex flex-col items-center justify-center pt-5 pb-6">--}}
      {{--            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"--}}
      {{--                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">--}}
      {{--              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
      {{--                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>--}}
      {{--            </svg>--}}
      {{--            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop--}}
      {{--            </p>--}}
      {{--            <p class="text-xs text-gray-500">PNG или JPG</p>--}}
      {{--          </div>--}}
      {{--          <input--}}
      {{--            type="file"--}}
      {{--            name="images[]"--}}
      {{--            id="inputImage"--}}
      {{--            multiple class="hidden">--}}
      {{--          <input id="dropzone-file" type="file" class="hidden"/>--}}
      {{--        </label>--}}
      {{--        @error('images')--}}
      {{--        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">--}}
      {{--          <span class="font-medium">Внимание!</span> {{ $message }}--}}
      {{--        </div>--}}
      {{--        @enderror--}}
      {{--        <div>--}}
      {{--          <x-primary-button class="block">Сохранить</x-primary-button>--}}
      {{--        </div>--}}
      {{--      </form>--}}

      <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="my-2 flex items-center">
        @csrf
        <input type="hidden" name="gallery_id" value="{{$gallery->id}}">
        <div class="">
          <label class="form-label" for="inputImage">Выберите фотографии:</label>
          <input
            type="file"
            name="images[]"
            id="inputImage"
            multiple
            class="form-control @error('images') is-invalid @enderror">

          @error('images')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <x-primary-button>Загрузить</x-primary-button>
      </form>


      <div class="grid grid-cols-3 gap-4">
        @foreach($images as $img_col)
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
  </div>
</x-app-layout>

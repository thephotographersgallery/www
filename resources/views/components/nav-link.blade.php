@props(['active'])

@php
  $classes = ($active ?? false)
              ? 'inline-flex flex-col items-center justify-center hover:bg-gray-100 group text-black'
              : 'inline-flex flex-col items-center justify-center hover:bg-gray-100 group text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>

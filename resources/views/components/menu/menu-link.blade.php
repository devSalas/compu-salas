@props(['active'])

@php

$classes = ($active ?? false)
? 'text-sky-400 hover:text-sky-400 py-3 flex gap-6'
: 'text-neutral-400 hover:text-sky-400 py-3 flex gap-6';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
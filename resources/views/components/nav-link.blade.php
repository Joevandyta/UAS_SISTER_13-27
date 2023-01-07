@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 pt-1 bg-primary text-sm font-medium leading-5 text-white focus:outline-none  transition duration-150 ease-in-out '
            : 'inline-flex items-center px-2 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black hover:bg-gradient-to-r from-primary to-second hover:text-white focus:text-white focus:bg-primary transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

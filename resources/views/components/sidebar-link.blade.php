@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-white py-1 ml-1  pl-6 text-base font-bold leading-5 focus:outline-none border-l-4 rounded-l-sm	 border-secondary transition duration-300 ease-in-out'
            : 'inline-flex items-center py-4 pl-6 border-b-2 border-transparent text-sm font-medium leading-5 text-accent opacity-75 hover:opacity-100 focus:outline-none focus:text-white transition duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
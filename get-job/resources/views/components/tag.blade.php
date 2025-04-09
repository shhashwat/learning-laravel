@props(['tag','size'=>'base'])

@php
    $classes = 'bg-white/10 font-bold rounded-xl hover:bg-white/25 transition-colors duration-300 ease-in-out';

    if($size == 'base'){
        $classes .= ' px-5 py-1 text-sm';
    };

    if($size == 'small'){
        $classes .= ' px-3 py-1 text-[.625rem]';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
{{ $tag->name }}
</a>
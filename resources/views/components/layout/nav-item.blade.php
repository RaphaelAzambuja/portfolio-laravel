@props(['link', 'text'])

<a href="{{ $link }}"
    {{ $attributes->merge([
        'class' =>
            'group relative px-1 text-sm font-semibold text-30 transition-colors duration-200 hover:text-10 md:text-md',
    ]) }}>
    {{ $text }}

    <span class="absolute -bottom-1 left-0 h-px w-0 bg-10 transition-all duration-200 group-hover:w-full"></span>
</a>

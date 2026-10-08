@props([
    'link',
    'text',
    'active' => false,
])

<a
    href="{{ $link }}"
    @click="menuOpen = false"
    {{ $attributes->class([
        'group relative px-1 text-sm font-semibold transition-colors duration-200 md:text-md',
        'text-10' => $active,
        'text-30 hover:text-10' => ! $active,
    ]) }}
>
    {{ $text }}

    <span
        @class([
            'absolute -bottom-1 left-0 h-px bg-10 transition-all duration-200',
            'w-full' => $active,
            'w-0 group-hover:w-full' => ! $active,
        ])
    ></span>
</a>

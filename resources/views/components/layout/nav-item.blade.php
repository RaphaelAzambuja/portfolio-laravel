@props([
    'link',
    'text',
    'active' => 'false',
])

<a
    href="{{ $link }}"
    @click="menuOpen = false"
    {{ $attributes->merge([
        'class' => 'group relative px-1 text-sm font-semibold transition-colors duration-200 md:text-md',
    ]) }}
    :class="{{ $active }}
        ? 'text-10'
        : 'text-30 hover:text-10'"
>
    {{ $text }}

    <span
        class="absolute -bottom-1 left-0 h-px bg-10 transition-all duration-200"
        :class="{{ $active }}
            ? 'w-full'
            : 'w-0 group-hover:w-full'"
    ></span>
</a>

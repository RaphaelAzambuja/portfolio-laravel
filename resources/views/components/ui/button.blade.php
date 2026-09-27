@props([
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $variants = [
        'primary' => [
            'wrapper' => 'border border-10',
            'content' => 'text-60 bg-10 ring-1 ring-10 ring-offset-[10]',
        ],
        'secondary' => [
            'wrapper' => 'border border-30/25',
            'content' => 'text-30 bg-60 ring-1 ring-30/25 ring-offset-1',
        ],
        'outline' => [
            'wrapper' => 'border border-10',
            'content' => 'text-10 bg-60 ring-1 ring-10 ring-offset-1',
        ],
        'ghost' => [
            'wrapper' => 'border-transparent',
            'content' => 'text-30 bg-transparent',
        ],
    ];

    $sizes = [
        'sm' => 'min-w-32 px-3 py-1 text-[11px] md:min-w-36 md:px-3.5 md:py-1.5 md:text-xs',
        'md' => 'min-w-32 px-3.5 py-1.5 text-xs md:min-w-36 md:px-4 md:py-1.5 md:text-sm',
        'lg' => 'min-w-32 px-5 py-2 text-sm md:min-w-36 md:px-5 md:py-2 md:text-base',
    ];

    $variant = $variants[$variant] ?? $variants['primary'];
    $size = $sizes[$size] ?? $sizes['md'];
@endphp

<a
    {{ $attributes->merge([
        'class' => 'group relative inline-flex rounded-md focus:outline-none cursor-pointer ' . $variant['wrapper'],
    ]) }}
>
    <span
        class="
            inline-flex w-full items-center justify-center
            rounded-sm
            text-center font-bold uppercase
            {{ $size }}
            {{ $variant['content'] }}
            transform transition-transform duration-150
            group-hover:-translate-x-1
            group-hover:-translate-y-1
            group-active:-translate-x-1
            group-active:-translate-y-1
        "
    >
        {{ $slot }}
    </span>
</a>

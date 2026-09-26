@props([
    'delay' => 2000,
    'size' => 46,
])

@once
    <style>
        @keyframes cube {
            0%,
            100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.9;
            }

            50% {
                transform: translateY(-6px) rotate(3deg);
                opacity: 1;
            }
        }

        .animate-cube {
            animation: cube 3s ease-in-out infinite;
        }
    </style>
@endonce

<div
    {{ $attributes->merge([
        'class' => 'pointer-events-none absolute',
    ]) }}
>
    <svg
        x-data="{
            initializeAnimation: false,

            init() {
                setTimeout(() => {
                    this.initializeAnimation = true;
                }, {{ $delay }});
            },
        }"
        :class="initializeAnimation ? 'animate-cube' : ''"
        class="text-10 -z-50"
        width="{{ $size }}"
        height="{{ round($size * 1.152) }}"
        viewBox="0 0 46 53"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404"
            stroke="currentColor"
            stroke-width="1.435"
            stroke-linejoin="bevel"
        />

        <path
            d="m45.202 39.105-22.1 12.702L1 39.105"
            stroke="currentColor"
            stroke-width="1.435"
            stroke-linejoin="bevel"
        />

        <path
            transform="matrix(.86698 .49834 .00003 1 1 13.699)"
            stroke="currentColor"
            stroke-width="1.435"
            stroke-linejoin="bevel"
            d="M0 0h25.491v25.405H0z"
        />

        <path
            transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)"
            stroke="currentColor"
            stroke-width="1.435"
            stroke-linejoin="bevel"
            d="M0 0h25.491v25.405H0z"
        />

        <path
            transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)"
            stroke="currentColor"
            stroke-width="1.435"
            stroke-linejoin="bevel"
            d="M0 0h25.491v25.491H0z"
        />
    </svg>
</div>

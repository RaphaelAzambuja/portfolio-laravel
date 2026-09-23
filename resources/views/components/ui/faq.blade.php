@props([
    'question',
    'index',
])

<div class="border-b border-30/25">
    <button
        type="button"
        class="flex w-full cursor-pointer items-center justify-between gap-6 py-6 text-left"
        @click="open = open === {{ $index }} ? null : {{ $index }}"
        :aria-expanded="open === {{ $index }}"
    >
        <h3 class="text-lg font-bold text-30">
            {{ $question }}
        </h3>

        <span
            class="shrink-0 text-2xl text-10 transition-transform duration-200"
            :class="{ 'rotate-45': open === {{ $index }} }"
        >
            +
        </span>
    </button>

    <div
        x-show="open === {{ $index }}"
        x-collapse
        x-cloak
    >
        <div class="pb-6 pr-12 text-md leading-7 text-30/75">
            {{ $slot }}
        </div>
    </div>
</div>

@props([
    'number',
    'image',
    'imageAlt',
    'category',
    'year',
    'title',
    'description',
    'href' => '#',
])

<article
    {{ $attributes->merge([
        'class' => 'group overflow-hidden rounded-lg border-2 border-30/15 bg-60 transition-colors duration-300 hover:border-10',
    ]) }}
>
    {{-- Imagem --}}
    <div class="overflow-hidden border-b-2 border-30/15 p-2">
        <div class="relative aspect-video overflow-hidden rounded-md bg-30/5">
            <img
                src="{{ $image }}"
                alt="{{ $imageAlt }}"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]"
            >

            <span
                class="absolute left-3 top-3 rounded-md border border-60/20 bg-30/80 px-2 py-1 text-[11px] font-bold text-60 backdrop-blur-sm"
            >
                {{ $number }}
            </span>
        </div>
    </div>

    {{-- Conteúdo --}}
    <div class="flex flex-col p-4">
        <div class="flex items-center justify-between gap-3">
            <span class="text-[11px] font-bold uppercase tracking-wider text-10">
                {{ $category }}
            </span>

            <span class="text-[11px] font-medium text-30/50">
                {{ $year }}
            </span>
        </div>

        <h3 class="mt-2 text-xl font-extrabold leading-tight text-30">
            {{ $title }}
        </h3>

        <p class="mt-2 line-clamp-2 text-sm leading-5 text-30/70">
            {{ $description }}
        </p>

        <div class="mt-4">
            <x-ui.button href="{{ $href }}" variant="ghost">
                Ver projeto →
            </x-ui.button>
        </div>
    </div>
</article>

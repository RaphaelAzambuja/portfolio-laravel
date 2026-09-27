@props([
    'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png',
    'imageAlt',
    'category',
    'year',
    'title',
    'description',
    'href' => '#',
    'participants' => [],
])

<article {{ $attributes->merge(['class' => 'group']) }}>
    {{-- Imagem --}}
    <div class="relative overflow-hidden rounded-lg bg-30/5">
        <div class="aspect-[16/10] overflow-hidden">
            <img
                src="{{ $image }}"
                alt="{{ $imageAlt }}"
                class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.03]"
            >
        </div>
    </div>

    {{-- Conteúdo --}}
    <div class="mt-4">
        <div class="flex items-center gap-2">
            <span class="text-[10px] font-bold uppercase tracking-wider text-10">
                {{ $category }}
            </span>

            <span class="h-1 w-1 rounded-full bg-30/30"></span>

            <span class="text-[10px] font-medium text-30/50">
                {{ $year }}
            </span>
        </div>

        <h3 class="mt-1 line-clamp-2 text-xl font-extrabold leading-tight text-30 transition-colors duration-200 group-hover:text-10">
            {{ $title }}
        </h3>

        <p class="mt-2 min-h-10 line-clamp-2 text-xs leading-5 text-30/65">
            {{ $description }}
        </p>
    </div>

    {{-- Ações --}}
    <div class="mt-3 flex w-full items-center justify-between">
        <x-ui.button
            href="{{ $href }}"
            variant="outline"
            size="sm"
        >
            Ver projeto →
        </x-ui.button>

        @if (count($participants))
            <div class="flex items-center -space-x-2">
                @foreach ($participants as $participant)
                    <div
                        class="flex h-8 w-8 items-center justify-center overflow-hidden rounded-full border-2 border-60 bg-30/10 text-[9px] font-bold text-30"
                        title="{{ $participant['name'] }}"
                    >
                        @if (!empty($participant['image']))
                            <img
                                src="{{ $participant['image'] }}"
                                alt="{{ $participant['name'] }}"
                                class="h-full w-full object-cover"
                            >
                        @else
                            {{ collect(explode(' ', $participant['name']))
                                ->map(fn ($name) => strtoupper(substr($name, 0, 1)))
                                ->take(2)
                                ->join('') }}
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</article>

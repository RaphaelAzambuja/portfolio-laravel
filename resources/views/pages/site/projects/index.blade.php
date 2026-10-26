<x-layout.main>

    <x-layout.section class="mt-15">

        {{-- Decoração --}}
        <x-ui.cube class="top-[12%] right-[7%]" :delay="1200" :size="26" />
        <x-ui.cube class="top-[55%] left-[4%]" :delay="2400" :size="32" />

        {{-- Cabeçalho --}}
        <div class="mx-auto max-w-6xl">

            <div class="border-b border-30/25 pb-8 sm:pb-10">

                <span class="text-sm font-bold uppercase tracking-wider text-10">
                    Produtos
                </span>

                <div class="mt-4 flex flex-col justify-between gap-5 md:flex-row md:items-end md:gap-8">

                    <h1 class="max-w-3xl font-heading text-4xl leading-tight tracking-tight text-30 sm:text-5xl lg:text-6xl">
                        Ideias que ganharam
                        <span class="italic text-10">forma.</span>
                    </h1>

                    <p class="max-w-sm text-base leading-7 text-30/75 md:text-right sm:text-lg">
                        Soluções desenvolvidas para resolver problemas reais
                        e transformar ideias em produtos digitais.
                    </p>

                </div>

            </div>

        </div>

        {{-- Lista de produtos --}}
        <div class="mx-auto mt-10 max-w-6xl sm:mt-14">

            @if ($projects->isNotEmpty())

                @foreach ($projects as $project)

                    <article class="grid gap-6 border-b border-30/25 py-8 sm:gap-8 sm:py-10 md:grid-cols-[280px_1fr] md:gap-10 lg:grid-cols-[340px_1fr] lg:gap-14">

                        {{-- Imagem --}}
                        <div class="aspect-4/3 overflow-hidden rounded-lg border border-30/15 bg-60/50">

                            @if ($project->image)

                                <img
                                    src="{{ $project->image }}"
                                    alt="{{ $project->image_alt }}"
                                    class="h-full w-full object-cover transition-transform duration-500 hover:scale-[1.02]"
                                />

                            @endif

                        </div>

                        {{-- Informações --}}
                        <div class="flex flex-col justify-between gap-6 sm:gap-8">

                            <div>

                                @if ($project->category || $project->year)

                                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs font-bold uppercase tracking-wider text-30/50">

                                        @if ($project->category)

                                            <span class="text-10">
                                                {{ $project->category }}
                                            </span>

                                        @endif

                                        @if ($project->year)

                                            <span>
                                                {{ $project->year }}
                                            </span>

                                        @endif

                                    </div>

                                @endif

                                <h2 class="mt-3 font-heading text-2xl font-extrabold leading-tight tracking-tight text-30 sm:mt-4 sm:text-3xl lg:text-4xl">
                                    {{ $project->title }}
                                </h2>

                                <p class="mt-3 max-w-2xl text-base leading-7 text-30/75 sm:mt-4 sm:text-lg sm:leading-8">
                                    {{ $project->description }}
                                </p>

                            </div>

                            {{-- Parceiros e link --}}
                            <div class="flex flex-wrap items-center justify-between gap-5">

                                @if ($project->partners->isNotEmpty())

                                    <div class="flex items-center gap-3">

                                        <div class="flex -space-x-2">

                                            @foreach ($project->partners as $partner)

                                                <div
                                                    class="flex h-8 w-8 items-center justify-center overflow-hidden rounded-full border-2 border-60 bg-60"
                                                    title="{{ $partner->name }}"
                                                >

                                                    @if ($partner->image)

                                                        <img
                                                            src="{{ $partner->image }}"
                                                            alt="{{ $partner->name }}"
                                                            class="h-full w-full object-cover"
                                                        />

                                                    @else

                                                        <span class="text-xs font-bold text-30">
                                                            {{ substr($partner->name, 0, 1) }}
                                                        </span>

                                                    @endif

                                                </div>

                                            @endforeach

                                        </div>

                                        <span class="text-xs font-semibold text-30/60">
                                            {{ $project->partners->count() }}
                                            {{ $project->partners->count() === 1 ? 'parceiro' : 'parceiros' }}
                                        </span>

                                    </div>

                                @endif

                                @if ($project->application_url)

                                    <a
                                        href="{{ $project->application_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="group inline-flex items-center gap-2 text-sm font-bold text-30 transition-colors duration-200 hover:text-10"
                                    >
                                        Ver produto

                                        <span class="transition-transform duration-200 group-hover:translate-x-1">
                                            →
                                        </span>
                                    </a>

                                @endif

                            </div>

                        </div>

                    </article>

                @endforeach

                {{-- Convite para o próximo produto --}}
                <article class="group grid gap-6 border-b border-30/25 py-8 sm:gap-8 sm:py-10 md:grid-cols-[280px_1fr] md:gap-10 lg:grid-cols-[340px_1fr] lg:gap-14">

                    {{-- Placeholder --}}
                    <div class="flex aspect-4/3 items-center justify-center rounded-lg border-2 border-dashed border-30/25 bg-60/50 transition-colors duration-200 group-hover:border-10">

                        <span class="text-5xl font-light text-30/25 transition-colors duration-200 group-hover:text-10">
                            +
                        </span>

                    </div>

                    {{-- Informações --}}
                    <div class="flex flex-col justify-center">

                        <h2 class="font-heading text-2xl font-extrabold leading-tight tracking-tight text-30 sm:text-3xl lg:text-4xl">
                            Seu projeto<span class="text-10">.</span>
                        </h2>

                        <p class="mt-3 max-w-2xl text-base leading-7 text-30/75 sm:mt-4 sm:text-lg sm:leading-8">
                            Talvez o próximo produto desta lista possa ser o seu.
                            Vamos conversar sobre a ideia e descobrir o que podemos construir juntos.
                        </p>

                        <div class="mt-6 sm:mt-8">
                            <x-ui.button href="{{ route('contact.index') }}" variant="outline">
                                Quero começar um projeto
                            </x-ui.button>
                        </div>

                    </div>

                </article>

            @else

                {{-- Estado vazio --}}
                <div class="border-y border-30/25 py-8 sm:py-10">

                    <div class="grid gap-6 sm:gap-8 md:grid-cols-[280px_1fr] md:gap-10 lg:grid-cols-[340px_1fr] lg:gap-14">

                        {{-- Placeholder --}}
                        <div class="flex aspect-4/3 items-center justify-center rounded-lg border-2 border-dashed border-30/25 bg-60/50">

                            <span class="text-5xl font-light text-30/25">
                                +
                            </span>

                        </div>

                        {{-- Informações --}}
                        <div class="flex flex-col justify-center">

                            <h2 class="font-heading text-2xl font-extrabold leading-tight tracking-tight text-30 sm:text-3xl lg:text-4xl">
                                Seu projeto<span class="text-10">.</span>
                            </h2>

                            <p class="mt-3 max-w-2xl text-base leading-7 text-30/75 sm:mt-4 sm:text-lg sm:leading-8">
                                Em breve, esta lista começa por aqui.
                                Talvez o primeiro produto seja uma ideia que ainda está na sua cabeça.
                            </p>

                            <div class="mt-6 sm:mt-8">
                                <x-ui.button href="{{ route('contact.index') }}" variant="outline">
                                    Quero começar um projeto
                                </x-ui.button>
                            </div>

                        </div>

                    </div>

                </div>

            @endif

        </div>

        {{-- Fechamento --}}
        <div class="mx-auto mt-12 max-w-6xl border-t border-30/25 pt-8 sm:mt-16 sm:pt-10">

            <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between sm:gap-8">

                <div>

                    <span class="text-sm font-bold uppercase tracking-wider text-10">
                        Tem uma ideia?
                    </span>

                    <p class="mt-2 font-heading text-xl font-extrabold tracking-tight text-30 sm:text-2xl lg:text-3xl">
                        Vamos transformar em algo real.
                    </p>

                </div>

                <x-ui.button href="{{ route('contact.index') }}">
                    Quero tirar uma ideia do papel
                </x-ui.button>

            </div>

        </div>

    </x-layout.section>

</x-layout.main>


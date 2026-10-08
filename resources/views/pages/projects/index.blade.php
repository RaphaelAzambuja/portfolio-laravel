<x-layout.main>

    <x-layout.section class="mt-15">

        {{-- Decoração --}}

        <x-ui.cube class="top-[12%] right-[7%]" :delay="1200" :size="26" />

        <x-ui.cube class="top-[55%] left-[4%]" :delay="2400" :size="32" />

        {{-- Cabeçalho --}}

        <div class="mx-auto max-w-6xl">

            <div class="border-b border-30/20 pb-10">

                <span class="text-sm font-bold uppercase tracking-wide text-10">
                    Produtos
                </span>

                <div class="mt-5 flex flex-col justify-between gap-6 md:flex-row md:items-end">

                    <h1 class="max-w-3xl font-heading text-4xl leading-[1.05] tracking-tight text-30 sm:text-6xl">
                        Ideias que ganharam
                        <span class="italic text-10">forma.</span>
                    </h1>

                    <p class="max-w-sm text-base leading-7 text-30/70 md:text-right">
                        Soluções desenvolvidas para resolver problemas reais
                        e transformar ideias em produtos digitais.
                    </p>

                </div>

            </div>

        </div>

        {{-- Lista --}}

        <div class="mx-auto mt-16 max-w-6xl">

            @if ($projects->isNotEmpty())

                <div>

                    @foreach ($projects as $project)

                        <article
                            class="grid gap-8 border-b border-30/15 py-10 md:grid-cols-[280px_1fr] md:gap-12 lg:grid-cols-[340px_1fr] lg:gap-16">

                            {{-- Imagem --}}

                            <div class="aspect-4/3 overflow-hidden rounded-md border border-30/10 bg-[#F6F9F7]">

                                @if ($project->image)

                                    <img
                                        src="{{ $project->image }}"
                                        alt="{{ $project->image_alt }}"
                                        class="h-full w-full object-cover transition duration-500 hover:scale-[1.02]"
                                    />

                                @endif

                            </div>

                            {{-- Informações --}}

                            <div class="flex flex-col justify-between gap-8">

                                <div>

                                    <div
                                        class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs font-bold uppercase tracking-wide text-30/50">

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

                                    <h2
                                        class="mt-4 font-heading text-3xl leading-tight tracking-tight text-30 sm:text-4xl">
                                        {{ $project->title }}
                                    </h2>

                                    <p class="mt-4 max-w-2xl text-base leading-7 text-30/70">
                                        {{ $project->description }}
                                    </p>

                                </div>

                                <div class="flex flex-wrap items-center justify-between gap-6">

                                    @if ($project->partners->isNotEmpty())

                                        <div class="flex items-center gap-3">

                                            <div class="flex -space-x-2">

                                                @foreach ($project->partners as $partner)

                                                    <div
                                                        class="flex h-8 w-8 items-center justify-center overflow-hidden rounded-full border-2 border-60 bg-[#F6F9F7]"
                                                        title="{{ $partner->name }}">

                                                        @if ($partner->image)

                                                            <img
                                                                src="{{ $partner->image }}"
                                                                alt="{{ $partner->name }}"
                                                                class="h-full w-full object-cover"
                                                            />

                                                        @else

                                                            <span class="text-[10px] font-bold text-30">
                                                                {{ substr($partner->name, 0, 1) }}
                                                            </span>

                                                        @endif

                                                    </div>

                                                @endforeach

                                            </div>

                                            <span class="text-xs font-semibold text-30/50">
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
                                            class="group inline-flex items-center gap-2 text-sm font-bold text-30 transition-colors hover:text-10">

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

                    {{-- Seu projeto --}}

                    <div
                        class="group grid gap-8 border-b border-30/15 py-10 md:grid-cols-[280px_1fr] md:gap-12 lg:grid-cols-[340px_1fr] lg:gap-16">

                        {{-- Placeholder --}}

                        <div
                            class="flex aspect-4/3 items-center justify-center rounded-md border-2 border-dashed border-30/20 bg-[#F6F9F7] transition-colors duration-200 group-hover:border-10">

                            <span
                                class="text-5xl font-light text-30/20 transition-colors duration-200 group-hover:text-10">
                                +
                            </span>

                        </div>

                        {{-- Informações --}}

                        <div class="flex flex-col justify-center">

                            <span class="text-xs font-bold uppercase tracking-wide text-10">
                                Próximo produto
                            </span>

                            <h2 class="mt-4 font-heading text-3xl leading-tight tracking-tight text-30 sm:text-4xl">
                                Seu projeto<span class="text-10">.</span>
                            </h2>

                            <p class="mt-4 max-w-2xl text-base leading-7 text-30/70">
                                Talvez o próximo produto desta lista possa ser o seu.
                                Vamos conversar sobre a ideia e descobrir o que podemos construir juntos.
                            </p>

                            <div class="mt-8">
                                <x-ui.button href="{{ route('contact.index') }}" variant="outline">
                                    Quero começar um projeto
                                </x-ui.button>
                            </div>

                        </div>

                    </div>

                </div>

            @else

                {{-- Seu projeto quando não existem produtos --}}

                <div class="border-y border-30/20">

                    <div
                        class="grid gap-8 py-12 md:grid-cols-[280px_1fr] md:gap-12 lg:grid-cols-[340px_1fr] lg:gap-16">

                        <div
                            class="flex aspect-4/3 items-center justify-center rounded-md border-2 border-dashed border-30/20 bg-[#F6F9F7]">

                            <span class="text-5xl font-light text-30/20">
                                +
                            </span>

                        </div>

                        <div class="flex flex-col justify-center">

                            <span class="text-xs font-bold uppercase tracking-wide text-10">
                                Primeiro produto
                            </span>

                            <h2 class="mt-4 font-heading text-3xl tracking-tight text-30 sm:text-4xl">
                                Seu projeto<span class="text-10">.</span>
                            </h2>

                            <p class="mt-4 max-w-2xl text-base leading-7 text-30/70">
                                Em breve, esta lista começa por aqui. Talvez o primeiro
                                produto seja uma ideia que ainda está na sua cabeça.
                            </p>

                            <div class="mt-8">
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

        <div class="mx-auto mt-16 max-w-6xl border-t border-30/20 pt-10">

            <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                <div>

                    <span class="text-sm font-bold uppercase text-10">
                        Tem uma ideia?
                    </span>

                    <p class="mt-2 font-heading text-2xl tracking-tight text-30 sm:text-3xl">
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

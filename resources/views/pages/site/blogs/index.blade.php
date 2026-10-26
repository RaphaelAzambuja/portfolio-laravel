<x-layout.main>

    <x-layout.section id="posts" class="mt-15">

        {{-- Cabeçalho --}}
        <div class="mb-10 border-b border-30/25 pb-8 sm:mb-12 sm:pb-10">

            <span class="text-sm font-bold uppercase tracking-wider text-10">
                Blog
            </span>

            <div class="mt-4 flex flex-col justify-between gap-5 md:flex-row md:items-end md:gap-8">

                <h1
                    class="max-w-3xl font-heading text-3xl font-extrabold leading-tight tracking-tight text-30 sm:text-4xl lg:text-5xl">
                    O que aprendi
                    <span class="italic text-10">construindo.</span>
                </h1>

                <p class="max-w-xl text-base leading-7 text-30/75 sm:text-lg md:text-right">
                    Experiências, aprendizados e ideias sobre tecnologia,
                    produtos digitais, negócios e tudo que acontece nos bastidores.
                </p>

            </div>

        </div>

        @if ($posts->isNotEmpty())

            @php
                $featuredPost = $posts->first();
                $remainingPosts = $posts->skip(1);
            @endphp

            {{-- Post em destaque --}}
            <article
                class="group mb-10 overflow-hidden rounded-lg border-2 border-30/25 bg-60/50 transition-all duration-200 hover:-translate-y-1 hover:border-10 sm:mb-12">

                <div class="grid md:grid-cols-2">

                    {{-- Imagem --}}
                    <a href="{{ route('blog.show', $featuredPost->slug) }}"
                        class="relative block aspect-[16/10] overflow-hidden bg-30/5 md:aspect-auto md:min-h-[320px] lg:min-h-[360px]">

                        @if ($featuredPost->image)
                            <img src="{{ $featuredPost->image }}"
                                alt="{{ $featuredPost->image_alt ?? $featuredPost->title }}"
                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center bg-60/50">
                                <span class="font-heading text-5xl font-bold text-30/15">
                                    {{ str($featuredPost->title)->substr(0, 1)->upper() }}
                                </span>
                            </div>
                        @endif

                    </a>

                    {{-- Conteúdo --}}
                    <div class="flex flex-col justify-center p-6 sm:p-8 lg:p-10">

                        <div class="mb-4 flex flex-wrap items-center gap-3 text-xs font-bold uppercase tracking-wider">

                            @if ($featuredPost->category)
                                <span class="text-10">
                                    {{ $featuredPost->category }}
                                </span>
                            @endif

                            @if ($featuredPost->category && $featuredPost->published_at)
                                <span class="text-30/30">•</span>
                            @endif

                            @if ($featuredPost->published_at)
                                <time class="text-30/50">
                                    {{ $featuredPost->published_at->translatedFormat('d M Y') }}
                                </time>
                            @endif

                        </div>

                        <h2
                            class="font-heading text-2xl font-extrabold leading-tight tracking-tight text-30 sm:text-3xl lg:text-4xl">

                            <a href="{{ route('blog.show', $featuredPost->slug) }}"
                                class="transition-colors duration-200 hover:text-10">
                                {{ $featuredPost->title }}
                            </a>

                        </h2>

                        @if ($featuredPost->excerpt)
                            <p class="mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg sm:leading-8">
                                {{ $featuredPost->excerpt }}
                            </p>
                        @endif

                        <div class="mt-6">

                            <a href="{{ route('blog.show', $featuredPost->slug) }}"
                                class="group/link inline-flex items-center gap-2 text-sm font-bold text-30 transition-colors duration-200 hover:text-10">
                                Ler artigo

                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </div>

            </article>

            {{-- Demais artigos --}}
            @if ($remainingPosts->isNotEmpty())

                <div class="grid gap-5 sm:gap-6 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($remainingPosts as $post)
                        <article
                            class="group flex h-full flex-col overflow-hidden rounded-lg border-2 border-30/25 bg-60/50 transition-all duration-200 hover:-translate-y-1 hover:border-10">

                            {{-- Imagem --}}
                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="relative block aspect-[16/10] overflow-hidden bg-30/5">

                                @if ($post->image)
                                    <img src="{{ $post->image }}" alt="{{ $post->image_alt ?? $post->title }}"
                                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                                @else
                                    <div class="flex h-full w-full items-center justify-center bg-60/50">
                                        <span class="font-heading text-4xl font-bold text-30/15">
                                            {{ str($post->title)->substr(0, 1)->upper() }}
                                        </span>
                                    </div>
                                @endif

                            </a>

                            {{-- Conteúdo --}}
                            <div class="flex flex-1 flex-col p-5 sm:p-6">

                                <div
                                    class="mb-3 flex flex-wrap items-center gap-3 text-xs font-bold uppercase tracking-wider">

                                    @if ($post->category)
                                        <span class="text-10">
                                            {{ $post->category }}
                                        </span>
                                    @endif

                                    @if ($post->category && $post->published_at)
                                        <span class="text-30/30">•</span>
                                    @endif

                                    @if ($post->published_at)
                                        <time class="text-30/50">
                                            {{ $post->published_at->translatedFormat('d M Y') }}
                                        </time>
                                    @endif

                                </div>

                                <h2 class="font-heading text-xl font-extrabold leading-tight text-30 sm:text-2xl">

                                    <a href="{{ route('blog.show', $post->slug) }}"
                                        class="transition-colors duration-200 hover:text-10">
                                        {{ $post->title }}
                                    </a>

                                </h2>

                                @if ($post->excerpt)
                                    <p class="mt-3 line-clamp-3 text-sm leading-6 text-30/75">
                                        {{ $post->excerpt }}
                                    </p>
                                @endif

                                <div class="mt-auto pt-5">

                                    <a href="{{ route('blog.show', $post->slug) }}"
                                        class="group/link inline-flex items-center gap-2 text-sm font-bold text-30 transition-colors duration-200 hover:text-10">
                                        Ler artigo

                                        <span class="transition-transform duration-200 group-hover/link:translate-x-1">
                                            →
                                        </span>
                                    </a>

                                </div>

                            </div>

                        </article>
                    @endforeach

                </div>

            @endif

            {{-- Paginação --}}
            @if ($posts->hasPages())

                <nav aria-label="Paginação dos artigos"
                    class="mt-10 flex flex-wrap items-center justify-center gap-2 sm:mt-12">

                    {{-- Página anterior --}}
                    @if ($posts->onFirstPage())
                        <span aria-disabled="true"
                            class="inline-flex h-10 min-w-10 cursor-not-allowed items-center justify-center rounded-lg border border-30/15 px-3 text-sm font-semibold text-30/25">
                            ←
                        </span>
                    @else
                        <a href="{{ $posts->previousPageUrl() }}" rel="prev" aria-label="Página anterior"
                            class="inline-flex h-10 min-w-10 items-center justify-center rounded-lg border border-30/25 px-3 text-sm font-semibold text-30 transition-colors duration-200 hover:border-10 hover:text-10">
                            ←
                        </a>
                    @endif

                    {{-- Números das páginas --}}
                    @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                        @if ($page == $posts->currentPage())
                            <span aria-current="page"
                                class="inline-flex h-10 min-w-10 items-center justify-center rounded-lg border-2 border-10 bg-10 px-3 text-sm font-bold text-60">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" aria-label="Página {{ $page }}"
                                class="inline-flex h-10 min-w-10 items-center justify-center rounded-lg border border-30/25 px-3 text-sm font-semibold text-30 transition-colors duration-200 hover:border-10 hover:text-10">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Próxima página --}}
                    @if ($posts->hasMorePages())
                        <a href="{{ $posts->nextPageUrl() }}" rel="next" aria-label="Próxima página"
                            class="inline-flex h-10 min-w-10 items-center justify-center rounded-lg border border-30/25 px-3 text-sm font-semibold text-30 transition-colors duration-200 hover:border-10 hover:text-10">
                            →
                        </a>
                    @else
                        <span aria-disabled="true"
                            class="inline-flex h-10 min-w-10 cursor-not-allowed items-center justify-center rounded-lg border border-30/15 px-3 text-sm font-semibold text-30/25">
                            →
                        </span>
                    @endif

                </nav>

            @endif
        @else
            {{-- Estado vazio --}}
            <div
                class="flex min-h-64 flex-col items-center justify-center rounded-lg border-2 border-30/25 bg-60/50 px-6 py-12 text-center sm:min-h-72">

                <h2 class="font-heading text-xl font-extrabold text-30 sm:text-2xl">
                    Ainda não há artigos publicados.
                </h2>

                <p class="mt-3 max-w-md text-base leading-7 text-30/75">
                    Em breve, novos conteúdos aparecerão por aqui.
                </p>

            </div>

        @endif

    </x-layout.section>

</x-layout.main>

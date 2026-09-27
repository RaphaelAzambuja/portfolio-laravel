<x-layout.main>

    <x-layout.section id="posts" class="mt-15">

        {{-- Header --}}
        <div class="mb-10">
            <span class="mb-3 block text-sm font-semibold uppercase tracking-widest text-10">
                Blog
            </span>

            <h1 class="font-heading text-3xl font-bold tracking-tight text-30 md:text-4xl">
                O que aprendi
                <span class="italic text-10">construindo.</span>
            </h1>

            <p class="mt-4 max-w-2xl text-base leading-7 text-30/70">
                Experiências, aprendizados e ideias sobre tecnologia,
                produtos digitais, negócios e tudo que acontece nos bastidores.
            </p>
        </div>

        @if ($posts->isNotEmpty())

            @php
                $featuredPost = $posts->first();
                $remainingPosts = $posts->skip(1);
            @endphp

            {{-- Post em destaque --}}
            <article
                class="group mb-10 overflow-hidden rounded-2xl border border-30/10 bg-60 transition-all duration-300 hover:-translate-y-1 hover:border-10/40"
            >
                <div class="grid md:grid-cols-2">

                    {{-- Imagem --}}
                    <a
                        href="{{ route('blog.show', $featuredPost->slug) }}"
                        class="relative block min-h-64 overflow-hidden bg-30/5 md:min-h-[360px]"
                    >
                        @if ($featuredPost->image)
                            <img
                                src="{{ $featuredPost->image }}"
                                alt="{{ $featuredPost->image_alt ?? $featuredPost->title }}"
                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                        @else
                            <div class="absolute inset-0 flex items-center justify-center bg-30/5">
                                <span class="font-heading text-4xl font-bold text-30/10">
                                    {{ str($featuredPost->title)->substr(0, 1)->upper() }}
                                </span>
                            </div>
                        @endif

                        <div class="absolute inset-0 bg-gradient-to-t from-30/40 via-transparent to-transparent"></div>
                    </a>

                    {{-- Conteúdo --}}
                    <div class="flex flex-col justify-center p-6 md:p-8 lg:p-10">

                        <div class="mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-wider">

                            @if ($featuredPost->category)
                                <span class="text-10">
                                    {{ $featuredPost->category }}
                                </span>

                                <span class="text-30/30">
                                    •
                                </span>
                            @endif

                            <time class="text-30/50">
                                {{ $featuredPost->published_at?->translatedFormat('d M Y') }}
                            </time>

                        </div>

                        <h2 class="font-heading text-2xl font-bold leading-tight text-30 md:text-3xl">
                            <a
                                href="{{ route('blog.show', $featuredPost) }}"
                                class="transition-colors duration-200 hover:text-10"
                            >
                                {{ $featuredPost->title }}
                            </a>
                        </h2>

                        @if ($featuredPost->excerpt)
                            <p class="mt-4 leading-7 text-30/70">
                                {{ $featuredPost->excerpt }}
                            </p>
                        @endif

                        <div class="mt-6">
                            <a
                                href="{{ route('blog.show', $featuredPost->slug) }}"
                                class="group/link inline-flex items-center gap-2 text-sm font-semibold text-30 transition-colors hover:text-10"
                            >
                                Ler artigo

                                <span class="transition-transform duration-200 group-hover/link:translate-x-1">
                                    →
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </article>

            {{-- Listagem --}}
            @if ($remainingPosts->isNotEmpty())
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($remainingPosts as $post)

                        <article
                            class="group flex flex-col overflow-hidden rounded-2xl border border-30/10 bg-60 transition-all duration-300 hover:-translate-y-1 hover:border-10/40"
                        >

                            {{-- Imagem --}}
                            <a
                                href="{{ route('blog.show', $post->slug) }}"
                                class="relative block aspect-[16/10] overflow-hidden bg-30/5"
                            >
                                @if ($post->image)
                                    <img
                                        src="{{ $post->image }}"
                                        alt="{{ $post->image_alt ?? $post->title }}"
                                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    >
                                @else
                                    <div class="flex h-full w-full items-center justify-center">
                                        <span class="font-heading text-3xl font-bold text-30/10">
                                            {{ str($post->title)->substr(0, 1)->upper() }}
                                        </span>
                                    </div>
                                @endif
                            </a>

                            {{-- Conteúdo --}}
                            <div class="flex flex-1 flex-col p-5">

                                <div class="mb-3 flex items-center gap-3 text-xs font-semibold uppercase tracking-wider">

                                    @if ($post->category)
                                        <span class="text-10">
                                            {{ $post->category }}
                                        </span>

                                        <span class="text-30/30">
                                            •
                                        </span>
                                    @endif

                                    <time class="text-30/50">
                                        {{ $post->published_at?->translatedFormat('d M Y') }}
                                    </time>

                                </div>

                                <h2 class="font-heading text-xl font-bold leading-tight text-30">
                                    <a
                                        href="{{ route('blog.show', $post) }}"
                                        class="transition-colors hover:text-10"
                                    >
                                        {{ $post->title }}
                                    </a>
                                </h2>

                                @if ($post->excerpt)
                                    <p class="mt-3 line-clamp-3 text-sm leading-6 text-30/70">
                                        {{ $post->excerpt }}
                                    </p>
                                @endif

                                <a
                                    href="{{ route('blog.show', $post->slug) }}"
                                    class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-30 transition-colors hover:text-10"
                                >
                                    Ler artigo →

                                </a>

                            </div>

                        </article>

                    @endforeach

                </div>
            @endif

            {{-- Paginação --}}
            @if ($posts->hasPages())
                <div class="mt-10 flex items-center justify-center gap-2">

                    {{-- Anterior --}}
                    @if ($posts->onFirstPage())
                        <span
                            class="inline-flex h-9 min-w-9 cursor-not-allowed items-center justify-center rounded-lg border border-30/10 px-3 text-sm font-semibold text-30/20"
                        >
                            ←
                        </span>
                    @else
                        <a
                            href="{{ $posts->previousPageUrl() }}"
                            class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-30/10 px-3 text-sm font-semibold text-30 transition-colors hover:border-10 hover:text-10"
                        >
                            ←
                        </a>
                    @endif

                    {{-- Páginas --}}
                    @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)

                        @if ($page == $posts->currentPage())

                            <span
                                class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-10 bg-10 px-3 text-sm font-semibold text-60"
                            >
                                {{ $page }}
                            </span>

                        @else

                            <a
                                href="{{ $url }}"
                                class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-30/10 px-3 text-sm font-semibold text-30 transition-colors hover:border-10 hover:text-10"
                            >
                                {{ $page }}
                            </a>

                        @endif

                    @endforeach

                    {{-- Próxima --}}
                    @if ($posts->hasMorePages())
                        <a
                            href="{{ $posts->nextPageUrl() }}"
                            class="inline-flex h-9 min-w-9 items-center justify-center rounded-lg border border-30/10 px-3 text-sm font-semibold text-30 transition-colors hover:border-10 hover:text-10"
                        >
                            →
                        </a>
                    @else
                        <span
                            class="inline-flex h-9 min-w-9 cursor-not-allowed items-center justify-center rounded-lg border border-30/10 px-3 text-sm font-semibold text-30/20"
                        >
                            →
                        </span>
                    @endif

                </div>
            @endif

        @else

            {{-- Estado vazio --}}
            <div class="flex min-h-72 flex-col items-center justify-center rounded-2xl border border-30/10 bg-30/5 px-6 text-center">

                <span class="font-heading text-4xl font-bold text-30/10">
                    ∅
                </span>

                <h2 class="mt-4 font-heading text-xl font-bold text-30">
                    Ainda não há artigos publicados.
                </h2>

                <p class="mt-2 max-w-md text-sm leading-6 text-30/60">
                    Em breve novos conteúdos aparecerão por aqui.
                </p>

            </div>

        @endif

    </x-layout.section>

</x-layout.main>

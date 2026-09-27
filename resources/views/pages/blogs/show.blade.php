<x-layout.main>

    <x-layout.section id="post" class="mt-15">

        <article>

            <a
                href="{{ route('blog.index') }}"
                class="group mb-6 inline-flex items-center gap-2 text-sm font-semibold text-30/60 transition-colors hover:text-10"
            >
                <span class="transition-transform duration-200 group-hover:-translate-x-1">
                    ←
                </span>

                Voltar para o blog
            </a>

            <div class="mb-4 flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-wider">
                <span class="text-10">
                    {{ $post->category }}
                </span>

                <span class="text-30/30">
                    •
                </span>

                <time class="text-30/50">
                    {{ $post->published_at?->translatedFormat('d/m/Y') }}
                </time>
            </div>

            <h1 class="font-heading text-3xl font-bold leading-tight tracking-tight text-30 md:text-4xl lg:text-5xl">
                {{ $post->title }}
            </h1>

            @if ($post->excerpt)
                <p class="mt-4 text-base leading-7 text-30/70 md:text-lg">
                    {{ $post->excerpt }}
                </p>
            @endif

            @if ($post->image)
                <figure class="mt-8 overflow-hidden rounded-2xl border border-30/10 bg-30/5">
                    <img
                        src="{{ $post->image }}"
                        alt="{{ $post->image_alt ?? $post->title }}"
                        class="h-auto max-h-[500px] w-full object-cover"
                    >
                </figure>
            @endif

            <div class="mx-auto mt-10">
                <div class="prose prose-base max-w-none prose-headings:font-heading prose-headings:text-30 prose-p:text-30/80 prose-p:leading-7 prose-a:text-10 prose-a:no-underline hover:prose-a:underline prose-strong:text-30 prose-li:text-30/80">
                    {!! $post->content !!}
                </div>
            </div>

            <footer class="mx-auto mt-12 border-t border-30/10 pt-6">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <span class="block text-xs font-semibold uppercase tracking-wider text-30/50">
                            Publicado em
                        </span>

                        <time class="mt-1 block text-sm font-semibold text-30">
                            {{ $post->published_at?->translatedFormat('d \d\e F \d\e Y') }}
                        </time>
                    </div>

                    <a
                        href="{{ route('blog.index') }}"
                        class="group inline-flex items-center gap-2 text-sm font-semibold text-30 transition-colors hover:text-10"
                    >
                        Mais artigos

                        <span class="transition-transform duration-200 group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>
            </footer>

        </article>

    </x-layout.section>

</x-layout.main>

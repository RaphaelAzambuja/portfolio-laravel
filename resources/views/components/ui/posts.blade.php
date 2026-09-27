@props(['title', 'excerpt', 'slug'])

<article class="group border-b-2 p-4 hover:bg-60 border-30/25 py-8 transition-colors duration-200 hover:border-10">
    <div class="flex flex-col gap-6 md:flex-row items-start md:items-center md:justify-between">

        <div class="max-w-7xl">
            <h3 class="mt-2 text-2xl font-extrabold text-30 transition-colors duration-200 group-hover:text-10">
                {{ $title }}
            </h3>
            <p class="mt-2 text-md text-30/75">
                {{ $excerpt }}
            </p>
        </div>

        <x-ui.button variant="secondary" href="{{ route('blog.show', $slug) }}">
            Ver post →
        </x-ui.button>

    </div>
</article>

@props(['tag', 'title'])

<article
    class="relative h-full rounded-lg border-2 border-30/25 bg-60 px-6 py-10 text-center transition-color duration-200 hover:-translate-y-1 hover:border-10">
    <span
        class="absolute -top-3 left-1/2 -translate-x-1/2 rounded bg-10 px-4 py-1 text-xs font-bold uppercase tracking-wider text-60">
        {{ $tag }}
    </span>

    <h3 class="mb-3 text-xl font-extrabold text-30">
        {{ $title }}
    </h3>

    <p class="text-md text-30/75">
        {{ $slot }}
    </p>
</article>

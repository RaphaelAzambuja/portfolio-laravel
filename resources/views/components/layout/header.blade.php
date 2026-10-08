<header
    x-data="{
        menuOpen: false,
    }"
    class="fixed top-0 z-50 w-full border border-30/10 bg-60/75 backdrop-blur"
    @keydown.escape.window="menuOpen = false"
    x-effect="document.body.classList.toggle('overflow-hidden', menuOpen)"
>
    <div class="site-container flex h-15 items-center justify-between">

        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            class="flex flex-col leading-none text-10 transition hover:text-30"
        >
            <span class="text-xl font-black tracking-tight">
                RaphaelAzambuja
            </span>

            <span class="mt-0.5 text-[0.6rem] font-semibold uppercase tracking-[0.2em] text-30">
                Soluções digitais
            </span>
        </a>


        {{-- Navegação desktop --}}
        <nav class="hidden items-center justify-center gap-10 lg:flex">

            <x-layout.nav-item
                link="{{ route('home') }}"
                text="Início"
                :active="request()->routeIs('home')"
            />

            <x-layout.nav-item
                link="{{ route('about.index') }}"
                text="Sobre"
                :active="request()->routeIs('about.*')"
            />

            <x-layout.nav-item
                link="{{ route('projects.index') }}"
                text="Produtos"
                :active="request()->routeIs('projects.*')"
            />

            <x-layout.nav-item
                link="{{ route('blog.index') }}"
                text="Blog"
                :active="request()->routeIs('blog.*')"
            />

            <x-layout.nav-item
                link="{{ route('contact.index') }}"
                text="Contato"
                :active="request()->routeIs('contact.*')"
            />

        </nav>


        {{-- Orçamento --}}
        <div class="hidden lg:block">

            <x-ui.button
                href="{{ route('contact.index') }}"
                variant="outline"
                size="sm"
            >
                Solicitar orçamento
            </x-ui.button>

        </div>

        {{-- Hamburger --}}
        <button
            type="button"
            class="inline-flex h-9 w-9 items-center justify-center rounded-md text-30 lg:hidden"
            @click="menuOpen = !menuOpen"
            :aria-expanded="menuOpen"
            aria-label="Abrir menu"
        >
            {{-- Menu --}}
            <svg
                x-show="!menuOpen"
                x-cloak
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="h-5 w-5"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            {{-- Fechar --}}
            <svg
                x-show="menuOpen"
                x-cloak
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="h-5 w-5"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>

    </div>


    {{-- Menu mobile --}}
    <aside
        x-show="menuOpen"
        x-cloak
        x-transition:enter="transform transition duration-300 ease-out"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition duration-200 ease-in"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-x-0 top-15 z-40 h-[calc(100dvh-3.75rem)] overflow-y-auto border-t border-30/10 bg-60 lg:hidden"
    >
        <nav class="site-container flex min-h-full flex-col px-6 py-10">

            {{-- Links --}}
            <div class="flex flex-col items-center gap-8">

                <x-layout.nav-item
                    link="{{ route('home') }}"
                    text="Início"
                    :active="request()->routeIs('home')"
                    class="text-base"
                />

                <x-layout.nav-item
                    link="{{ route('about.index') }}"
                    text="Sobre"
                    :active="request()->routeIs('about.*')"
                    class="text-base"
                />

                <x-layout.nav-item
                    link="{{ route('projects.index') }}"
                    text="Produtos"
                    :active="request()->routeIs('projects.*')"
                    class="text-base"
                />

                <x-layout.nav-item
                    link="{{ route('blog.index') }}"
                    text="Blog"
                    :active="request()->routeIs('blog.*')"
                    class="text-base"
                />

                <x-layout.nav-item
                    link="{{ route('contact.index') }}"
                    text="Contato"
                    :active="request()->routeIs('contact.*')"
                    class="text-base"
                />

            </div>


            {{-- CTA --}}
            <div class="mt-auto w-full pt-10">

                <div class="mb-6 border-t border-30/10"></div>

                <x-ui.button
                    href="{{ route('contact.index') }}"
                    variant="primary"
                    class="w-full justify-center"
                >
                    Solicitar orçamento
                </x-ui.button>

            </div>

        </nav>
    </aside>

</header>

<footer class="border-t border-30/25">

    <div class="site-container">

        {{-- Conteúdo principal --}}
        <div class="grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-4 lg:gap-16">

            {{-- Marca --}}
            <div class="lg:col-span-2">

                <a
                    href="{{ route('home') }}"
                    class="flex w-fit flex-col leading-none text-10 transition hover:text-30"
                >
                    <span class="text-2xl font-black tracking-tight">
                        RaphaelAzambuja
                    </span>

                    <span class="mt-1 text-[0.6rem] font-semibold uppercase tracking-[0.2em] text-30">
                        Soluções digitais
                    </span>
                </a>

                <p class="mt-6 max-w-md text-md leading-7 text-30/75">
                    Transformando ideias em soluções digitais simples,
                    funcionais e pensadas para resolver problemas reais.
                </p>

            </div>


            {{-- Navegação --}}
            <div>

                <span class="text-xs font-bold uppercase tracking-wider text-30/50">
                    Navegação
                </span>

                <nav class="mt-5 flex flex-col items-start gap-3">

                    <x-layout.nav-item link="#hero" text="Início"/>
                    <x-layout.nav-item link="#services" text="Serviços"/>
                    <x-layout.nav-item link="#portfolio" text="Projetos"/>
                    <x-layout.nav-item link="#blog" text="Blog"/>

                </nav>

            </div>


            {{-- Contato --}}
            <div>

                <span class="text-xs font-bold uppercase tracking-wider text-30/50">
                    Vamos conversar
                </span>

                <p class="mt-5 text-md leading-7 text-30/75">
                    Tem uma ideia ou problema para resolver?
                </p>

                <x-ui.button
                    href="https://api.whatsapp.com/send/?phone=554899341106"
                    target="_blank"
                    variant="outline"
                    size="sm"
                    class="mt-5"
                >
                    Falar comigo →
                </x-ui.button>

            </div>

        </div>


        {{-- Rodapé --}}
        <div class="flex flex-col gap-3 border-t border-30/25 py-6 text-sm text-30/50 sm:flex-row sm:items-center sm:justify-between">

            <span>
                © {{ date('Y') }} Raphael Azambuja. Todos os direitos reservados.
            </span>

            <span>
                Feito com <span class="text-30">❤️</span> e <x-layout.nav-item class="text-30/50" link="https://laravel.com/" text="Laravel."/>
            </span>

        </div>

    </div>

</footer>
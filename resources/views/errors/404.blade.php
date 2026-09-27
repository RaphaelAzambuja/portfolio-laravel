<x-layout.main>

    <section class="site-section relative mt-15 min-h-[calc(100vh-3.75rem)] overflow-hidden">

        {{-- Cubos decorativos --}}
        <x-ui.cube
            class="top-[14%] left-[8%]"
            :delay="800"
            :size="30"
        />

        <x-ui.cube
            class="top-[20%] right-[10%]"
            :delay="2000"
            :size="42"
        />

        <x-ui.cube
            class="bottom-[18%] left-[20%]"
            :delay="1400"
            :size="24"
        />

        <x-ui.cube
            class="bottom-[12%] right-[22%]"
            :delay="2800"
            :size="34"
        />

        <x-ui.cube
            class="top-[48%] left-[4%]"
            :delay="1100"
            :size="20"
        />

        <div class="site-container flex min-h-[calc(100vh-3.75rem)] items-center justify-center">

            <div class="w-full max-w-2xl text-center">

                {{-- Código --}}
                <div class="mb-6">
                    <span class="font-heading text-8xl font-black leading-none tracking-tight text-10 sm:text-9xl">
                        404
                    </span>
                </div>

                {{-- Título --}}
                <h1 class="font-heading text-4xl font-extrabold leading-tight text-30 sm:text-5xl">
                    Essa página saiu do papel...
                    <span class="italic text-10">mas não está aqui.</span>
                </h1>

                {{-- Descrição --}}
                <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                    O endereço que você acessou não existe, foi movido
                    ou talvez tenha ficado pelo caminho.
                </p>

                {{-- CTA --}}
                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">

                    <x-ui.button
                        href="{{ route('home') }}"
                        variant="primary"
                        class="w-56 justify-center whitespace-nowrap"
                    >
                        Voltar para o início
                    </x-ui.button>

                    <x-ui.button
                        href="#"
                        variant="secondary"
                        class="w-56 justify-center whitespace-nowrap"
                        onclick="history.back(); return false;"
                    >
                        Voltar para onde estava
                    </x-ui.button>

                </div>

                {{-- Mensagem complementar --}}
                <div class="mt-12 flex items-center justify-center gap-2 text-sm text-30/50">
                    <span class="h-1.5 w-1.5 rounded-full bg-10"></span>

                    <span>
                        Nada perdido. Só precisamos recalcular a rota.
                    </span>

                    <span class="h-1.5 w-1.5 rounded-full bg-10"></span>
                </div>

            </div>

        </div>
    </section>

</x-layout.main>

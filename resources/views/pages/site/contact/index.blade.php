<x-layout.main>
    <x-layout.section id="contato" class="mt-16">

        <x-ui.cube class="top-[10%] left-[6%]" :delay="1000" :size="30" />
        <x-ui.cube class="top-[20%] right-[7%]" :delay="2200" :size="42" />
        <x-ui.cube class="bottom-[12%] left-[20%]" :delay="1600" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />

        <div class="flex flex-col items-center gap-12">
            <div class="w-full max-w-2xl text-center">

                <span class="text-sm font-bold uppercase text-10">
                    Contato
                </span>

                <h1 class="mt-2 text-4xl font-extrabold leading-tight text-30 sm:text-5xl">
                    Tem uma ideia?
                    <span class="italic text-10">Vamos tirar do papel.</span>
                </h1>

                <p class="mx-auto mt-6 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                    Me conte um pouco sobre o que você precisa.
                    A partir disso, podemos entender o problema, conversar
                    sobre possibilidades e encontrar a melhor solução para o seu negócio.
                </p>
            </div>

            <div class="relative w-full max-w-3xl rounded-2xl border border-30/20 bg-60 p-6 shadow-sm sm:p-8">
                <livewire:forms.contact-form />
            </div>
        </div>

    </x-layout.section>
</x-layout.main>

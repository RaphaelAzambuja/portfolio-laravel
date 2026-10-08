<x-layout.main>

    {{-- Hero --}}

    <x-layout.section id="hero" class="mt-15">

        <x-ui.cube class="top-[12%] left-[8%]" :delay="800" :size="30" />
        <x-ui.cube class="top-[18%] right-[8%]" :delay="2000" :size="42" />
        <x-ui.cube class="bottom-[14%] left-[22%]" :delay="1400" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />

        <div class="text-center">

            <h1 class="font-heading text-4xl leading-tight md:text-6xl">
                O artesão e o <span class="italic text-10">arquiteto</span>
            </h1>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 md:text-lg">
                Sou um homem que transformou a curiosidade em um hobby, o hobby em um trabalho, o trabalho em
                um objetivo. Um homem que na verdade ainda tenta entender como fazer coisas cada vez maiores.
            </p>

        </div>

    </x-layout.section>


    {{-- História --}}

    <x-layout.section id="story" class="overflow-visible">

        <x-ui.cube class="top-[8%] right-[6%]" :delay="1100" :size="28" />
        <x-ui.cube class="top-[55%] left-[4%]" :delay="2300" :size="38" />

        <div class="mx-auto max-w-6xl">
            <div class="grid items-start gap-12 md:grid-cols-[1fr_2fr] md:gap-20">
                <div class="md:sticky md:top-24">
                    <span class="text-sm font-bold uppercase text-10">
                        História
                    </span>

                    <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-30 sm:text-5xl">
                        Do código viemos.
                        <span class="text-10">
                            Ao código voltaremos.
                        </span>
                    </h2>

                    <div class="mt-12 border-l-2 border-10 pl-6">
                        <p class="font-heading text-2xl leading-tight text-30 sm:text-3xl">
                            O código me ensinou a construir.
                        </p>

                        <p class="mt-2 font-heading text-2xl leading-tight text-10 sm:text-3xl">
                            As pessoas me ensinaram o que construir.
                        </p>
                    </div>
                </div>


                {{-- Texto --}}

                <div class="space-y-8 text-base leading-7 text-30/75 sm:text-lg">

                    <p>
                        Antes de ser programador, eu era
                        <span class="font-bold text-30">curioso.</span>
                        Jogava, lia, gostava de ficção e fantasia e passava muito tempo
                        tentando entender como as coisas funcionavam.
                    </p>

                    <p>
                        Aos dezesseis anos comecei a programar.
                        <span class="font-bold text-30">E me divertia.</span>
                        Codava, ajudava meus colegas, ensinava o que aprendia e
                        aprendia com quem sabia mais.
                    </p>

                    <p>
                        Quando terminei a escola, veio aquela sensação que muita
                        gente conhece:
                        <span class="font-heading font-bold italic text-10">
                            e agora?
                        </span>
                    </p>

                    <p>
                        Dei aulas, prestei suporte, fiz manutenção, programei e
                        passei por diferentes trabalhos. Fui conhecendo o mercado
                        e, aos poucos, comecei a perceber que havia
                        <span class="font-bold text-30">
                            alguma coisa faltando.
                        </span>
                    </p>

                    <p>
                        O ambiente corporativo muitas vezes parecia esquecer o
                        próprio homem. Processos importavam mais que pessoas,
                        interesses mais que relações e dinheiro mais que propósito.
                        Eu não queria passar a vida apenas cumprindo uma função
                        dentro de uma máquina que não sentia como minha.
                    </p>

                    <p>
                        Então me desprendi um pouco disso.
                        Fui para um lugar que, à primeira vista, parecia estar
                        <span class="font-bold text-30">
                            abaixo de onde eu queria chegar.
                        </span>
                    </p>

                    <p>
                        Entrei no ramo comercial, mais precisamente no setor de autopeças
                        Foi ali que comecei a entender outra coisa:
                        <span class="font-heading font-bold italic text-10">
                            pessoas.
                        </span>
                    </p>

                    <p>
                        Aprendi a ouvir, vender, negociar, perceber necessidades,
                        lidar com diferentes personalidades e entender o que faz
                        alguém confiar em outra pessoa.

                        Também descobri um enorme gosto pelos carros, não apenas
                        como objetos, mas pela parte técnica, mecânica e por tudo
                        que existe ao redor deles.
                    </p>

                    <p>
                        Hoje estou em uma nova etapa. Trabalho no setor comercial,
                        enquanto continuo atuando como
                        <span class="font-bold text-30">
                            desenvolvedor autônomo.
                        </span>
                    </p>

                    {{-- Fechamento --}}

                    <div class="border-l-2 border-10 pl-6 pt-2">

                        <p class="font-heading text-xl leading-8 text-30 sm:text-2xl">
                            No fim, talvez eu não tenha me afastado tanto do código.
                        </p>

                        <p class="mt-2 text-10">
                            Apenas fui descobrir quem estava do outro lado dele.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </x-layout.section>


    {{-- Manifesto --}}

    <x-layout.section id="manifesto">

        <x-ui.cube class="top-[10%] left-[5%]" :delay="1300" :size="34" />
        <x-ui.cube class="top-[25%] right-[5%]" :delay="2600" :size="24" />
        <x-ui.cube class="bottom-[12%] right-[18%]" :delay="1800" :size="42" />

        <div class="mx-auto max-w-5xl">

            <div class="mx-auto mb-12 max-w-2xl text-center">

                <span class="text-sm font-bold uppercase text-10">
                    Como eu penso
                </span>

                <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-30 sm:text-5xl">
                    Software não é bala de prata.
                </h2>

            </div>

            <div class="space-y-8 text-base leading-7 text-30/75 sm:text-lg">

                <p>
                    Eu não acredito que software resolva tudo.
                </p>

                <p>
                    Um sistema não conserta sozinho um processo ruim.
                    Uma automação não substitui alguém disposto a fazer
                    acontecer. E tecnologia nenhuma salva uma ideia que
                    não tem propósito.
                </p>

                <p>
                    Mas quando existe um sonho, um objetivo e alguém disposto
                    a construir de verdade, a tecnologia pode ser uma ferramenta
                    absurda.
                </p>

                <p class="font-medium text-30">
                    É aí que eu quero estar.
                </p>

            </div>

        </div>

    </x-layout.section>


    {{-- O que procuro --}}

    <x-layout.section id="values">

        <div class="mx-auto max-w-6xl">

            <div class="mx-auto mb-12 max-w-2xl text-center">

                <span class="text-sm font-bold uppercase text-10">
                    Com quem quero trabalhar
                </span>

                <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                    Gente que quer fazer acontecer.
                </h2>

                <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                    Não quero apenas entregar software.
                    Quero fazer parte de algo que tenha vontade de crescer.
                </p>

            </div>

            <div class="grid gap-6 md:grid-cols-3">

                <div class="border border-30/20 p-7">
                    <h3 class="mt-4 text-2xl font-extrabold">
                        Quebrar padrões
                    </h3>

                    <p class="mt-3 leading-7 text-30/70">
                        Gosto de gente que questiona o jeito tradicional
                        de fazer as coisas e não aceita um “sempre foi assim”
                        como resposta.
                    </p>
                </div>

                <div class="border border-30/20 p-7">
                    <h3 class="mt-4 text-2xl font-extrabold">
                        Assumir o processo
                    </h3>

                    <p class="mt-3 leading-7 text-30/70">
                        Resultado não aparece por mágica. Quero trabalhar
                        com quem entende que software é parte de um processo
                        maior.
                    </p>
                </div>

                <div class="border border-30/20 p-7">
                    <h3 class="mt-4 text-2xl font-extrabold">
                        Construir de verdade
                    </h3>

                    <p class="mt-3 leading-7 text-30/70">
                        Gosto de quem tem uma ideia, coloca energia nela
                        e está disposto a fazer o trabalho necessário para
                        transformá-la em realidade.
                    </p>

                </div>

            </div>

        </div>

    </x-layout.section>


    {{-- O papel --}}

    <x-layout.section id="role">

        <x-ui.cube class="top-[10%] right-[7%]" :delay="900" :size="30" />
        <x-ui.cube class="bottom-[15%] left-[8%]" :delay="2200" :size="26" />

        <div class="mx-auto max-w-5xl">

            <div class="border-y border-30/20 py-14 sm:py-20">

                <span class="text-sm font-bold uppercase text-10">
                    O que eu quero ser
                </span>

                <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-30 sm:text-5xl">
                    Mais do que o cara que escreve o código.
                </h2>

                <div class="mt-8 max-w-3xl space-y-6 text-base leading-7 text-30/75 sm:text-lg">

                    <p>
                        Quero que você me veja como alguém que está do seu lado.
                    </p>

                    <p>
                        Alguém que entende o problema, pensa junto, constrói,
                        questiona quando precisa e ajuda a encontrar o caminho.
                    </p>

                    <p>
                        Se o meu trabalho fizer sua empresa ganhar dinheiro,
                        alimentar sua família, pagar seus funcionários melhor
                        ou simplesmente tornar sua vida um pouco mais fácil,
                        então eu fiz algo que valeu a pena.
                    </p>

                    <p class="font-semibold text-30">
                        Quero ser um dos pilares daquilo que você está construindo.
                    </p>

                </div>

            </div>

        </div>

    </x-layout.section>


    {{-- Fechamento --}}

    <x-layout.section id="closing">

        <div class="mx-auto max-w-5xl text-center">

            <p class="font-heading text-4xl leading-tight text-30 sm:text-5xl">
                Quero ser grande.
            </p>

            <p class="mt-6 text-lg leading-8 text-30/70 sm:text-xl">
                Quero construir coisas que importem.
                Quero fazer um trabalho que tenha valor.
                Quero viver uma vida que tenha significado.
            </p>

            <div class="mt-10 flex justify-center">

                <x-ui.button href="{{ route('contact.index') }}">
                    Vamos construir alguma coisa.
                </x-ui.button>

            </div>

        </div>

    </x-layout.section>

</x-layout.main>

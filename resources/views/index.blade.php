<x-layout.main>

    {{-- Hero --}}
    <section id="hero" class="site-section relative overflow-hidden mt-15">

        <x-ui.cube class="top-[12%] left-[8%]" :delay="800" :size="30" />
        <x-ui.cube class="top-[18%] right-[8%]" :delay="2000" :size="42" />
        <x-ui.cube class="bottom-[14%] left-[22%]" :delay="1400" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />

        <div class="site-container">
            <div class="text-center">

                <div class="hidden sm:flex justify-center items-center gap-6 mb-8 text-lg font-medium text-30">
                    <div class="flex items-center gap-2">
                        <x-ui.check-icon />
                        <span>Feito sob medida</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <x-ui.check-icon />
                        <span>Robusto e confiável</span>
                    </div>

                    <div class="flex items-center gap-2">
                        <x-ui.check-icon />
                        <span>Focado em resultados</span>
                    </div>
                </div>

                <h1 class="font-heading text-4xl md:text-6xl">
                    Construindo soluções digitais que
                    <span class="italic text-10">geram resultados</span>.
                </h1>

                <p class="mx-auto mt-4 max-w-2xl text-sm md:text-xl text-30/75">
                    Sou um artesão da web que transforma ideias em
                    <span class="font-bold">softwares elegantes</span>,
                    feitos para gerar resultados.
                </p>

                <div class="mt-12 items-center flex flex-col md:flex-row justify-center gap-4">
                    <x-ui.button href="#contato" variant="primary">
                        Ver soluções
                    </x-ui.button>

                    <x-ui.button href="#contato" variant="secondary">
                        Solicitar orçamento
                    </x-ui.button>
                </div>

            </div>
        </div>
    </section>


    {{-- Serviços --}}
    <section id="services" class="site-section relative overflow-hidden">

        {{-- Cubes --}}
        <x-ui.cube class="top-[10%] left-[5%]" :delay="1200" :size="34" />
        <x-ui.cube class="top-[12%] right-[6%]" :delay="2400" :size="26" />
        <x-ui.cube class="top-[52%] left-[3%]" :delay="1800" :size="46" />
        <x-ui.cube class="top-[58%] right-[5%]" :delay="3000" :size="32" />
        <x-ui.cube class="bottom-[7%] left-[46%]" :delay="900" :size="22" />

        <div class="site-container justify center flex flex-col gap-12">

            {{-- Título --}}
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-10">
                    Serviços
                </span>
                <h2 class="text-4xl font-extrabold text-30 sm:text-5xl">
                    Soluções para cada necessidade.
                </h2>

                <p class="mt-4 text-md text-30/75">
                    Do primeiro contato à automação de processos, construo soluções digitais
                    pensadas para o que seu negócio realmente precisa.
                </p>
            </div>

            <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">
                @foreach ($services as $service)
                    <x-ui.service-card :tag="$service['tag']" :title="$service['title']" :explanation="$service['explanation']" />
                @endforeach
            </div>
        </div>

        <div class="mt-12 flex justify-center">
            <x-ui.button href="#contato">
                Qual a solução ideal para meu problema?
            </x-ui.button>
        </div>
    </section>


    {{-- Projetos --}}
    <section id="projects" class="site-section relative overflow-hidden">

        <x-ui.cube class="top-[8%] left-[4%]" :delay="1000" :size="40" />
        <x-ui.cube class="top-[30%] right-[3%]" :delay="2300" :size="26" />
        <x-ui.cube class="top-[62%] left-[6%]" :delay="1700" :size="32" />
        <x-ui.cube class="bottom-[8%] right-[24%]" :delay="2900" :size="22" />

        <div class="site-container">

            <div class="site-container">
                <div class="mx-auto mb-14 max-w-2xl text-center">
                    <span class="text-sm font-bold uppercase tracking-wider text-10">
                        Projetos
                    </span>
                    <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                        Projetos que saíram do papel.
                    </h2>

                    <p class="mt-4 text-md text-30/75">
                        Algumas ideias que ganharam forma e se transformaram
                        em soluções reais.
                    </p>
                </div>
            </div>


            <div class="grid gap-x-10 gap-y-16 md:grid-cols-2 lg:gap-x-16 lg:gap-y-24">

                <x-ui.project-showcase {{-- image="" --}}
                    imageAlt="Projeto exemplo"
                    category="Sistema web"
                    year="2026" title="Sistema de gestão"
                    description="Sistema desenvolvido para organizar processos e facilitar a operação da empresa."
                    href="#"
                    :participants="[
                        ['name' => 'Raphael Azambuja', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'Nicolas Pereira', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'João Silva', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                    ]" />
                <x-ui.project-showcase {{-- image="" --}}
                    imageAlt="Projeto exemplo"
                    category="Sistema web"
                    year="2026" title="Sistema de gestão"
                    description="Sistema desenvolvido para organizar processos e facilitar a operação da empresa."
                    href="#"
                    :participants="[
                        ['name' => 'Raphael Azambuja', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'Nicolas Pereira', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'João Silva', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                    ]" />
                <x-ui.project-showcase {{-- image="" --}}
                    imageAlt="Projeto exemplo"
                    category="Sistema web"
                    year="2026" title="Sistema de gestão"
                    description="Sistema desenvolvido para organizar processos e facilitar a operação da empresa."
                    href="#"
                    :participants="[
                        ['name' => 'Raphael Azambuja', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'Nicolas Pereira', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'João Silva', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                    ]" />
                <x-ui.project-showcase {{-- image="" --}}
                    imageAlt="Projeto exemplo"
                    category="Sistema web"
                    year="2026" title="Sistema de gestão"
                    description="Sistema desenvolvido para organizar processos e facilitar a operação da empresa."
                    href="#"
                    :participants="[
                        ['name' => 'Raphael Azambuja', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'Nicolas Pereira', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                        ['name' => 'João Silva', 'image' => 'https://cdn.pixabay.com/photo/2021/02/18/20/52/goku-6028390_1280.png'],
                    ]" />


            </div>

            <div class="mt-12 flex justify-center gap-4">
                <x-ui.button href="" variant="secondary">
                    Ver produtos →
                </x-ui.button>

                <x-ui.button href="#contato">
                    Adoraria tirar um projeto do papel
                </x-ui.button>
            </div>

        </div>
    </section>


    {{-- Posts --}}
    <section id="posts" class="site-section relative overflow-hidden">

        {{-- Cubes --}}
        <x-ui.cube class="top-[8%] right-[6%]" :delay="700" :size="30" />
        <x-ui.cube class="top-[28%] left-[3%]" :delay="2100" :size="42" />
        <x-ui.cube class="top-[62%] right-[4%]" :delay="1500" :size="24" />
        <x-ui.cube class="bottom-[8%] left-[18%]" :delay="2700" :size="32" />

        <div class="site-container flex flex-col py-12">

            {{-- Título --}}
            <div class="mb-14 text-center p-4 self-center">
                <h2 class="text-4xl font-extrabold text-30 sm:text-5xl">
                    O que aprendi construindo.
                </h2>

                <p class="mt-4 text-md text-30/75">
                    Algumas soluções que transformaram ideias em experiências reais.
                </p>
            </div>

            {{-- Posts --}}
            <x-ui.posts title="Primeiro post" content="Conteúdo do primeiro post." link="https://google.com" />

            <x-ui.posts title="Segundo post" content="Conteúdo do segundo post." link="https://example.com" />

            <x-ui.posts title="Terceiro post" content="Conteúdo do terceiro post." link="https://github.com" />

        </div>

        <div class="mt-12 flex justify-center">
            <x-ui.button href="#contato" variant="outline">
                Estou com sorte ☆
            </x-ui.button>
        </div>

    </section>


    {{-- FAQ --}}
    <section id="faq" class="site-section relative overflow-hidden">

        {{-- Cubes --}}
        <x-ui.cube class="top-[8%] left-[7%]" :delay="900" :size="36" />
        <x-ui.cube class="top-[30%] right-[6%]" :delay="2200" :size="24" />
        <x-ui.cube class="top-[58%] left-[4%]" :delay="1400" :size="44" />
        <x-ui.cube class="bottom-[8%] right-[18%]" :delay="2800" :size="28" />

        <div class="site-container">

            {{-- Cabeçalho --}}
            <div class="mx-auto mb-14 max-w-2xl text-center">
                <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                    Ficou com alguma dúvida?
                </h2>

                <p class="mt-4 text-md text-30/75">
                    Algumas respostas para as dúvidas mais comuns antes de começar um projeto.
                </p>
            </div>

            <div x-data="{ open: null }" class="mx-auto max-w-4xl">
                <div class="border-t bg-60 border-30/25">
                    @foreach ($faqs as $index => $faq)
                        <x-ui.faq :question="$faq['question']" :index="$index">
                            {{ $faq['answer'] }}
                        </x-ui.faq>
                    @endforeach
                </div>
            </div>

            <div class="mt-12 flex justify-center">
                <x-ui.button target="_blank" href="https://api.whatsapp.com/send/?phone=554899341106">
                    Ainda com dúvidas?
                </x-ui.button>
            </div>

        </div>
    </section>

</x-layout.main>

<x-layout.main>

    {{-- Hero --}}
    <section id="hero" class="site-section relative overflow-hidden mt-15">

        <x-ui.cube class="top-[12%] left-[7%]" :delay="800" :size="30" />

        <x-ui.cube class="top-[22%] right-[9%]" :delay="2000" :size="42" />

        <x-ui.cube class="bottom-[12%] left-[24%]" :delay="1400" :size="24" />

        <x-ui.cube class="bottom-[8%] right-[28%]" :delay="2800" :size="34" />

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

        <x-ui.cube class="top-[8%] left-[4%]" :delay="1200" :size="34" />

        <x-ui.cube class="top-[25%] right-[5%]" :delay="2400" :size="26" />

        <x-ui.cube class="top-[55%] left-[10%]" :delay="1800" :size="46" />

        <x-ui.cube class="bottom-[10%] right-[12%]" :delay="3000" :size="32" />

        <x-ui.cube class="bottom-[5%] left-[42%]" :delay="900" :size="22" />

        <div class="site-container justify center flex flex-col gap-12">

            {{-- Título --}}
            <div class="mx-auto max-w-2xl text-center">

                <h2 class="text-4xl font-extrabold text-30 sm:text-5xl">
                    Soluções para cada necessidade.
                </h2>

                <p class="mt-4 text-md text-30/75">
                    Do primeiro contato à automação de processos, construo soluções digitais
                    pensadas para o que seu negócio realmente precisa.
                </p>

            </div>


            <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">

                <x-ui.service-card tag="Presença digital" title="Sites institucionais">
                    Apresente sua empresa na internet com um site profissional, claro e pensado para transmitir
                    credibilidade.
                </x-ui.service-card>

                <x-ui.service-card tag="Captação" title="Landing pages">
                    Páginas criadas para campanhas, lançamentos e captação de clientes, com foco em uma ação específica.
                </x-ui.service-card>

                <x-ui.service-card tag="Vendas" title="Lojas online">
                    Venda seus produtos pela internet com uma loja completa, organizada e preparada para facilitar a
                    experiência de compra.
                </x-ui.service-card>

                <x-ui.service-card tag="Experiência" title="Aplicativos mobile">
                    Aplicativos para celular que colocam sua solução na palma da mão e criam novas formas de atender
                    seus clientes.
                </x-ui.service-card>

                <x-ui.service-card tag="Processos" title="Sistemas web">
                    Softwares sob medida para organizar processos, automatizar tarefas e resolver necessidades
                    específicas
                    do seu negócio.
                </x-ui.service-card>

                <x-ui.service-card tag="Automação" title="Integrações">
                    Conecte suas ferramentas e faça seus sistemas trabalharem juntos, reduzindo tarefas manuais e
                    melhorando
                    seus processos.
                </x-ui.service-card>

            </div>

        </div>

    </section>


    {{-- CTA --}}
    <div class="relative flex justify-center">

        <x-ui.cube class="top-1/2 left-[8%] -translate-y-1/2" :delay="1600" :size="28" />

        <x-ui.cube class="top-1/2 right-[8%] -translate-y-1/2" :delay="2600" :size="36" />

        <x-ui.button target="_blank" href="https://api.whatsapp.com/send/?phone=554899341106">
            Vamos encontrar a solução? →
        </x-ui.button>

    </div>


    {{-- Projetos --}}
    <section id="portfolio" class="site-section relative overflow-hidden">

        <x-ui.cube class="top-[8%] right-[6%]" :delay="1000" :size="40" />

        <x-ui.cube class="top-[38%] left-[3%]" :delay="2300" :size="26" />

        <x-ui.cube class="bottom-[18%] right-[12%]" :delay="1700" :size="32" />

        <x-ui.cube class="bottom-[5%] left-[25%]" :delay="2900" :size="22" />

        <div class="site-container">

            {{-- Cabeçalho --}}
            <div class="site-container">

                <div class="mb-16 max-w-2xl">

                    <span class="text-sm font-bold uppercase tracking-wider text-10">
                        Portfólio
                    </span>

                    <h2 class="text-4xl font-extrabold text-30 sm:text-5xl">
                        Projetos que saíram do papel.
                    </h2>

                    <p class="mt-4 text-md leading-7 text-30/75">
                        Algumas ideias que ganharam forma e se transformaram
                        em soluções reais.
                    </p>

                </div>

            </div>


            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                <x-ui.project-card number="01"
                    image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbZr0Sjs2p7BZbxr6-lJ4jACIT8Tdq-fHKwA&s"
                    image-alt="MemoryCard" category="Plataforma" year="2025" title="MemoryCard"
                    description="Uma plataforma criada para preservar e organizar a história dos jogos clássicos de forma simples e acessível."
                    href="#" />
                <x-ui.project-card number="01"
                    image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbZr0Sjs2p7BZbxr6-lJ4jACIT8Tdq-fHKwA&s"
                    image-alt="MemoryCard" category="Plataforma" year="2025" title="MemoryCard"
                    description="Uma plataforma criada para preservar e organizar a história dos jogos clássicos de forma simples e acessível."
                    href="#" />
                <x-ui.project-card number="01"
                    image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbZr0Sjs2p7BZbxr6-lJ4jACIT8Tdq-fHKwA&s"
                    image-alt="MemoryCard" category="Plataforma" year="2025" title="MemoryCard"
                    description="Uma plataforma criada para preservar e organizar a história dos jogos clássicos de forma simples e acessível."
                    href="#" />
                <x-ui.project-card number="01"
                    image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbZr0Sjs2p7BZbxr6-lJ4jACIT8Tdq-fHKwA&s"
                    image-alt="MemoryCard" category="Plataforma" year="2025" title="MemoryCard"
                    description="Uma plataforma criada para preservar e organizar a história dos jogos clássicos de forma simples e acessível."
                    href="#" />

            </div>


            <div class="mt-12 flex justify-center">

                <x-ui.button href="#contato" variant="secondary">
                    Quero tirar um projeto do papel →
                </x-ui.button>

            </div>

        </div>

    </section>


    {{-- Posts --}}
    <section id="posts" class="site-section relative overflow-hidden">

        <x-ui.cube class="top-[5%] left-[6%]" :delay="700" :size="30" />

        <x-ui.cube class="top-[35%] right-[4%]" :delay="2100" :size="42" />

        <x-ui.cube class="bottom-[25%] left-[3%]" :delay="1500" :size="24" />

        <x-ui.cube class="bottom-[8%] right-[15%]" :delay="2700" :size="32" />

        <div class="site-container flex flex-col border rounded-lg border-30/25 py-12">

            {{-- Título --}}
            <div class="mb-14 text-center p-4 self-center">
                <h2 class="text-4xl font-extrabold text-30 sm:text-5xl">
                    O que aprendi construindo.
                </h2>

                <p class="mt-4 text-md text-30/75">
                    Algumas soluções que transformaram ideias em experiências reais.
                </p>
            </div>


            <div>

                <article class="group border-b-2 border-30/25 py-8 transition-colors duration-200 hover:border-10">

                    <div class="flex flex-col gap-6 md:flex-row items-start md:items-center md:justify-between">

                        <div class="max-w-7xl">

                            <h3
                                class="mt-2 text-2xl font-extrabold text-30 transition-colors duration-200 group-hover:text-10">
                                O que faz um e-commerce realmente funcionar?
                            </h3>

                            <p class="mt-2 text-md text-30/75">
                                Criar uma loja virtual vai muito além de colocar produtos em uma página. Neste artigo,
                                exploro alguns dos principais elementos por trás de um e-commerce eficiente.
                            </p>

                        </div>

                        <x-ui.button variant="secondary" href="#">
                            Ver post →
                        </x-ui.button>

                    </div>

                </article>


                <article class="group border-b-2 border-30/25 py-8 transition-colors duration-200 hover:border-10">

                    <div class="flex flex-col gap-6 md:flex-row items-start md:items-center md:justify-between">

                        <div class="max-w-7xl">

                            <h3
                                class="mt-2 text-2xl font-extrabold text-30 transition-colors duration-200 group-hover:text-10">
                                O que faz um e-commerce realmente funcionar?
                            </h3>

                            <p class="mt-2 text-md text-30/75">
                                Criar uma loja virtual vai muito além de colocar produtos em uma página. Neste artigo,
                                exploro alguns dos principais elementos por trás de um e-commerce eficiente.
                            </p>

                        </div>

                        <x-ui.button variant="secondary" href="#">
                            Ver post →
                        </x-ui.button>

                    </div>

                </article>


                <article class="group border-b-2 border-30/25 py-8 transition-colors duration-200 hover:border-10">

                    <div class="flex flex-col gap-6 md:flex-row items-start md:items-center md:justify-between">

                        <div class="max-w-7xl">

                            <h3
                                class="mt-2 text-2xl font-extrabold text-30 transition-colors duration-200 group-hover:text-10">
                                O que faz um e-commerce realmente funcionar?
                            </h3>

                            <p class="mt-2 text-md text-30/75">
                                Criar uma loja virtual vai muito além de colocar produtos em uma página. Neste artigo,
                                exploro alguns dos principais elementos por trás de um e-commerce eficiente.
                            </p>

                        </div>

                        <x-ui.button variant="secondary">
                            Ver post →
                        </x-ui.button>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- FAQ --}}
    <section id="faq" class="site-section relative overflow-hidden">

        <x-ui.cube class="top-[56%] right-[7%]" :delay="900" :size="36" />

        <x-ui.cube class="top-[5%] left-[55%]" :delay="2200" :size="24" />

        <x-ui.cube class="top-[65%] right-[64%]" :delay="1400" :size="44" />

        <x-ui.cube class="bottom-[5%] left-[18%]" :delay="2800" :size="28" />

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

                    @php
                        $faqs = [
                            [
                                'question' => 'Que tipo de projeto você desenvolve?',
                                'answer' =>
                                    'Desenvolvo sites institucionais, landing pages, lojas online, sistemas web, aplicativos mobile e integrações entre sistemas, sempre de acordo com a necessidade do projeto.',
                            ],
                            [
                                'question' => 'Você trabalha com projetos sob medida?',
                                'answer' =>
                                    'Sim. Cada projeto é desenvolvido considerando o objetivo, as necessidades e os processos do negócio, evitando soluções genéricas quando elas não fazem sentido.',
                            ],
                            [
                                'question' => 'Quanto custa um projeto?',
                                'answer' =>
                                    'O valor depende do tipo de solução, da complexidade e das funcionalidades necessárias. Depois de entender o projeto, é possível definir o escopo e apresentar um orçamento.',
                            ],
                            [
                                'question' => 'Quanto tempo leva para desenvolver?',
                                'answer' =>
                                    'O prazo varia de acordo com o escopo do projeto. Projetos mais simples podem ser entregues rapidamente, enquanto sistemas maiores precisam de mais etapas de desenvolvimento e validação.',
                            ],
                            [
                                'question' => 'Posso solicitar alterações durante o projeto?',
                                'answer' =>
                                    'Sim. O projeto é desenvolvido de forma alinhada com o cliente, permitindo validar as etapas e ajustar o que for necessário dentro do escopo definido.',
                            ],
                            [
                                'question' => 'Você também faz manutenção depois da entrega?',
                                'answer' =>
                                    'Sim. Dependendo do projeto, é possível continuar com suporte, manutenção, melhorias e novas funcionalidades após a entrega.',
                            ],
                        ];
                    @endphp

                    @foreach ($faqs as $index => $faq)
                        <x-ui.faq :question="$faq['question']" :index="$index">
                            {{ $faq['answer'] }}
                        </x-ui.faq>
                    @endforeach

                </div>
            </div>

            <div class="mt-12 flex justify-center">
                <x-ui.button target="_blank" href="https://api.whatsapp.com/send/?phone=554899341106">
                    Ainda ficou com alguma dúvida? →
                </x-ui.button>
            </div>

        </div>

    </section>

</x-layout.main>

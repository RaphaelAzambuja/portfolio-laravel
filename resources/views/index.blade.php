<x-layout.main>

    {{-- Hero --}}
    <x-layout.section id="hero" class="mt-15">

        <x-ui.cube class="top-[12%] left-[8%]" :delay="800" :size="30" />
        <x-ui.cube class="top-[18%] right-[8%]" :delay="2000" :size="42" />
        <x-ui.cube class="bottom-[14%] left-[22%]" :delay="1400" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />

        <div class="text-center">

            <div class="mb-8 hidden items-center justify-center gap-6 text-lg font-medium text-30 sm:flex">

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

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 md:text-lg">
                Sou um artesão da web que transforma ideias em
                <span class="font-bold text-30">softwares elegantes</span>,
                feitos para gerar resultados.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">

                <x-ui.button href="#services" variant="primary" class="w-48 justify-center whitespace-nowrap">
                    Ver soluções
                </x-ui.button>

                <x-ui.button href="#contato" variant="secondary" class="w-48 justify-center whitespace-nowrap">
                    Solicitar orçamento
                </x-ui.button>

            </div>

        </div>

    </x-layout.section>


    {{-- Serviços --}}
    <x-layout.section id="services">

        <x-ui.cube class="top-[10%] left-[5%]" :delay="1200" :size="34" />
        <x-ui.cube class="top-[12%] right-[6%]" :delay="2400" :size="26" />
        <x-ui.cube class="top-[52%] left-[3%]" :delay="1800" :size="46" />
        <x-ui.cube class="top-[58%] right-[5%]" :delay="3000" :size="32" />
        <x-ui.cube class="bottom-[7%] left-[46%]" :delay="900" :size="22" />

        <div class="mx-auto mb-12 max-w-2xl text-center">

            <span class="text-sm font-bold uppercase text-10">
                Serviços
            </span>

            <h2 class="text-4xl font-extrabold text-30 sm:text-5xl">
                Soluções para cada necessidade.
            </h2>

            <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Do primeiro contato à automação de processos, construo soluções digitais
                pensadas para o que seu negócio realmente precisa.
            </p>

        </div>

        <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">

            @foreach ($services as $service)

                <x-ui.service-card
                    :tag="$service['tag']"
                    :title="$service['title']"
                    :explanation="$service['explanation']"
                />

            @endforeach

        </div>

        <div class="mt-12 flex justify-center">

            <x-ui.button href="#contato">
                Qual a solução ideal para meu problema?
            </x-ui.button>

        </div>

    </x-layout.section>


    {{-- Resultados --}}
    <x-layout.section id="results">

        <x-ui.cube class="top-[10%] right-[6%]" :delay="900" :size="30" />
        <x-ui.cube class="top-[38%] left-[4%]" :delay="2100" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[20%]" :delay="1600" :size="38" />

        <div class="mx-auto mb-14 max-w-2xl text-center">

            <span class="text-sm font-bold uppercase text-10">
                Resultados
            </span>

            <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-30 sm:text-5xl">
                Tecnologia que trabalha a favor do negócio.
            </h2>

            <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Software não existe para parecer bonito ou seguir uma tendência.
                Ele precisa resolver problemas, facilitar o trabalho e abrir espaço
                para aquilo que realmente importa.
            </p>

        </div>

        <div class="mx-auto max-w-6xl">

            <div class="grid border-30/20 md:grid-cols-2">

                {{-- Mais eficiência --}}
                <div class="border-b border-30/20 p-8 md:border-r lg:p-10">

                    <h3 class="mt-5 text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Mais eficiência
                    </h3>

                    <p class="mt-3 max-w-xl text-base leading-7 text-30/70 sm:text-lg">
                        Menos trabalho manual, menos retrabalho e processos mais
                        organizados para que você possa se concentrar no que
                        realmente precisa ser feito.
                    </p>

                </div>

                <div class="border-b border-30/20 p-8 lg:p-10">

                    <h3 class="mt-5 text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Mais presença
                    </h3>

                    <p class="mt-3 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                        Uma experiência digital pensada para representar sua empresa,
                        transmitir confiança e transformar visitantes em oportunidades.
                    </p>

                </div>

                <div class="border-b border-30/20 p-8 md:border-b-0 md:border-r lg:p-10">

                    <h3 class="mt-5 text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Mais controle
                    </h3>

                    <p class="mt-3 max-w-xl text-base leading-7 text-30/70 sm:text-lg">
                        Informações, processos e ferramentas trabalhando juntos para
                        facilitar a operação e ajudar você a tomar decisões melhores.
                    </p>

                </div>

                <div class="border-b border-30/20 p-8 md:border-none lg:p-10">

                    <h3 class="mt-5 text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Mais possibilidades
                    </h3>

                    <p class="mt-3 max-w-xl text-base leading-7 text-30/70 sm:text-lg">
                        Soluções construídas para acompanhar o negócio, permitindo
                        automatizar, integrar e criar novas possibilidades conforme
                        as necessidades aparecem.
                    </p>

                </div>

            </div>

            <div class="mt-12 flex justify-center">

                <x-ui.button href="#contato">
                    Quero melhorar meu negócio
                </x-ui.button>

            </div>

        </div>

    </x-layout.section>


    {{-- Como funciona --}}
    <x-layout.section id="process">

        <x-ui.cube class="top-[10%] right-[7%]" :delay="1100" :size="30" />
        <x-ui.cube class="top-[42%] left-[4%]" :delay="2500" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[18%]" :delay="1700" :size="38" />

        <div class="mx-auto mb-14 max-w-3xl text-center">

            <span class="text-sm font-bold uppercase text-10">
                Como funciona
            </span>

            <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-30 sm:text-5xl">
                Do primeiro contato ao que vem depois.
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 sm:text-lg">
                Cada projeto é construído com proximidade, clareza e atenção
                aos detalhes, desde a primeira conversa até muito depois da entrega.
            </p>

        </div>

        <div class="mx-auto max-w-6xl">

            <div class="group grid border-t border-30/20 py-8 transition-colors sm:py-10">

                <div class="mt-3 sm:mt-0">

                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Entender
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Começo ouvindo. Entendo seu negócio, o contexto,
                        os objetivos e o problema que precisa ser resolvido.
                    </p>

                </div>

            </div>

            <div class="group grid border-t border-30/20 py-8 transition-colors sm:py-10">

                <div class="mt-3 sm:mt-0">

                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Definir
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Transformo as necessidades em uma direção clara,
                        definindo o que faz sentido construir e como chegar ao resultado.
                    </p>

                </div>

            </div>

            <div class="group grid border-t border-30/20 py-8 transition-colors sm:py-10">

                <div class="mt-3 sm:mt-0">

                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Construir
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Desenvolvo a solução com cuidado, valido cada etapa,
                        ajusto os detalhes e mantenho você próximo do processo.
                    </p>

                </div>

            </div>

            <div class="group grid border-t border-30/20 py-8 transition-colors sm:py-10">

                <div class="mt-3 sm:mt-0">

                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Entregar
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Coloco tudo para funcionar, cuido dos últimos detalhes
                        e entrego uma solução pronta para fazer parte do seu negócio.
                    </p>

                </div>

            </div>

            <div class="grid border-y border-30/20 py-8 sm:py-10">

                <div class="mt-3 sm:mt-0 sm:flex sm:items-start sm:justify-between sm:gap-12">

                    <div>

                        <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                            Continuar
                        </h3>

                        <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                            O cuidado não termina com a entrega. Continuo por perto,
                            oferecendo suporte, acompanhando o projeto e cuidando do
                            que vier depois.
                        </p>

                    </div>

                    <span class="mt-2 hidden shrink-0 text-sm font-bold uppercase text-10 sm:block">
                        Além da entrega
                    </span>

                </div>

            </div>

        </div>

        <div class="mt-12 flex justify-center">

            <x-ui.button href="#contato">
                Quero começar um projeto
            </x-ui.button>

        </div>

    </x-layout.section>


    {{-- Produtos --}}
    <x-layout.section id="projects">

        <x-ui.cube class="top-[8%] left-[4%]" :delay="1000" :size="40" />
        <x-ui.cube class="top-[30%] right-[3%]" :delay="2300" :size="26" />
        <x-ui.cube class="top-[62%] left-[6%]" :delay="1700" :size="32" />
        <x-ui.cube class="bottom-[8%] right-[24%]" :delay="2900" :size="22" />

        <div class="mx-auto mb-12 max-w-2xl text-center">

            <span class="text-sm font-bold uppercase text-10">
                Produtos
            </span>

            <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                Ideias transformadas em produtos.
            </h2>

            <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Algumas ideias que ganharam forma e se transformaram em soluções reais.
            </p>
        </div>

        <div class="grid gap-x-10 gap-y-16 md:grid-cols-2 lg:gap-x-16 lg:gap-y-24">
            @foreach ($projects as $project)
                <x-ui.project-showcase
                    :image="$project->image"
                    :imageAlt="$project->image_alt"
                    :category="$project->category"
                    :year="$project->year"
                    :title="$project->title"
                    :description="$project->description"
                    :href="$project->application_url"
                    :participants="$project->partners->map(
                        fn($partner) => [
                            'name' => $partner->name,
                            'image' => $partner->image,
                        ],
                    )"
                />
            @endforeach
        </div>

        <div class="mt-12 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <x-ui.button href="{{ route('projects.index') }}" variant="secondary" class="w-56 justify-center whitespace-nowrap">
                Outros produtos →
            </x-ui.button>

            <x-ui.button href="#contato" class="w-56 justify-center whitespace-nowrap">
                Tirar um projeto do papel
            </x-ui.button>
        </div>

    </x-layout.section>


    {{-- Posts --}}
    <x-layout.section id="posts">

        <x-ui.cube class="top-[8%] right-[6%]" :delay="700" :size="30" />
        <x-ui.cube class="top-[28%] left-[3%]" :delay="2100" :size="42" />
        <x-ui.cube class="top-[62%] right-[4%]" :delay="1500" :size="24" />
        <x-ui.cube class="bottom-[8%] left-[18%]" :delay="2700" :size="32" />

        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="text-sm font-bold uppercase text-10">
                Blog
            </span>

            <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                O que aprendi construindo.
            </h2>

            <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Sonhos criam ideias, ideias nos levam a caminhos, e cada caminho
                percorrido se transforma em experiência.
            </p>
        </div>

        <div class="space-y-6">
            @foreach ($posts as $post)
                <x-ui.posts
                    :title="$post['title']"
                    :excerpt="$post['excerpt']"
                    :slug="$post['slug']"
                />
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            <x-ui.button href="{{ route('blog.index') }}" variant="outline">
                Ver mais posts
            </x-ui.button>
        </div>
    </x-layout.section>


    {{-- FAQ --}}
    <x-layout.section id="faq">

        <x-ui.cube class="top-[8%] left-[7%]" :delay="900" :size="36" />
        <x-ui.cube class="top-[30%] right-[6%]" :delay="2200" :size="24" />
        <x-ui.cube class="top-[58%] left-[4%]" :delay="1400" :size="44" />
        <x-ui.cube class="bottom-[8%] right-[18%]" :delay="2800" :size="28" />

        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="text-sm font-bold uppercase text-10">
                FAQ
            </span>

            <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                Ficou com alguma dúvida?
            </h2>

            <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Algumas respostas para as dúvidas mais comuns antes de começar um projeto.
            </p>
        </div>

        <div x-data="{ open: null }" class="mx-auto max-w-6xl">
            <div class="border-t border-30/25">
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

    </x-layout.section>
</x-layout.main>

<x-layout.main>

    {{-- Hero --}}
    <x-layout.section id="hero" class="mt-15">

        <x-ui.cube class="top-[12%] left-[8%]" :delay="800" :size="30" />
        <x-ui.cube class="top-[18%] right-[8%]" :delay="2000" :size="42" />
        <x-ui.cube class="bottom-[14%] left-[22%]" :delay="1400" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />

        <div class="text-center">

            {{-- Destaques --}}
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

            {{-- Título --}}
            <h1 class="font-heading text-4xl md:text-6xl">
                Construindo soluções digitais que
                <span class="italic text-10">geram resultados</span>.
            </h1>

            {{-- Subtítulo --}}
            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 md:text-lg">
                Sou um artesão da web que transforma ideias em
                <span class="font-bold">softwares elegantes</span>,
                feitos para gerar resultados.
            </p>

            {{-- CTA --}}
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <x-ui.button href="#contato" variant="primary" class="w-48 justify-center whitespace-nowrap">
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

        {{-- Cabeçalho --}}
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

        {{-- Serviços --}}
        <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">
            @foreach ($services as $service)
                <x-ui.service-card :tag="$service['tag']" :title="$service['title']" :explanation="$service['explanation']" />
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="mt-12 flex justify-center">
            <x-ui.button href="#contato">
                Qual a solução ideal para meu problema?
            </x-ui.button>
        </div>

    </x-layout.section>

    {{-- Como funciona --}}
    <x-layout.section id="process">

        <x-ui.cube class="top-[10%] right-[7%]" :delay="1100" :size="30" />
        <x-ui.cube class="top-[42%] left-[4%]" :delay="2500" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[18%]" :delay="1700" :size="38" />

        {{-- Cabeçalho --}}
        <div class="mx-auto mb-14 max-w-3xl text-center">
            <span class="text-sm font-bold uppercase text-10">
                Como funciona
            </span>

            <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-30 sm:text-5xl">
                Do primeiro contato ao que vem depois.
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 sm:text-lg">
                Cada projeto é construído com proximidade, clareza e atenção
                aos detalhes — desde a primeira conversa até muito depois da entrega.
            </p>
        </div>

        {{-- Etapas --}}
        <div class="mx-auto max-w-6xl">

            {{-- 01 --}}
            <div class="group grid border-t border-30/20 py-8 transition-colors sm:grid-cols-[100px_1fr] sm:py-10">

                <div>
                    <span class="text-sm font-bold text-10">
                        01
                    </span>
                </div>

                <div class="mt-3 sm:mt-0">
                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Entender
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Começamos ouvindo. Entendemos seu negócio, o contexto,
                        os objetivos e o problema que precisa ser resolvido.
                    </p>
                </div>

            </div>

            {{-- 02 --}}
            <div class="group grid border-t border-30/20 py-8 transition-colors sm:grid-cols-[100px_1fr] sm:py-10">

                <div>
                    <span class="text-sm font-bold text-10">
                        02
                    </span>
                </div>

                <div class="mt-3 sm:mt-0">
                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Definir
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Transformamos as necessidades em uma direção clara,
                        definindo o que faz sentido construir e como chegar ao resultado.
                    </p>
                </div>

            </div>

            {{-- 03 --}}
            <div class="group grid border-t border-30/20 py-8 transition-colors sm:grid-cols-[100px_1fr] sm:py-10">

                <div>
                    <span class="text-sm font-bold text-10">
                        03
                    </span>
                </div>

                <div class="mt-3 sm:mt-0">
                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Construir
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Desenvolvemos a solução com cuidado, validando cada etapa,
                        ajustando os detalhes e mantendo você próximo do processo.
                    </p>
                </div>

            </div>

            {{-- 04 --}}
            <div class="group grid border-t border-30/20 py-8 transition-colors sm:grid-cols-[100px_1fr] sm:py-10">

                <div>
                    <span class="text-sm font-bold text-10">
                        04
                    </span>
                </div>

                <div class="mt-3 sm:mt-0">
                    <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                        Entregar
                    </h3>

                    <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                        Colocamos tudo para funcionar, cuidamos dos últimos detalhes
                        e entregamos uma solução pronta para fazer parte do seu negócio.
                    </p>
                </div>

            </div>

            {{-- 05 --}}
            <div class="grid border-y border-30/20 py-8 sm:grid-cols-[100px_1fr] sm:py-10">

                <div>
                    <span class="text-sm font-bold text-10">
                        05
                    </span>
                </div>

                <div class="mt-3 sm:mt-0 sm:flex sm:items-start sm:justify-between sm:gap-12">

                    <div>
                        <h3 class="text-2xl font-extrabold tracking-tight text-30 sm:text-3xl">
                            Continuar
                        </h3>

                        <p class="mt-3 max-w-3xl text-base leading-7 text-30/70 sm:text-lg">
                            O cuidado não termina com a entrega. Seguimos por perto,
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

        {{-- CTA --}}
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

        {{-- Cabeçalho --}}
        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span class="text-sm font-bold uppercase text-10">
                Produtos
            </span>

            <h2 class="mt-2 text-4xl font-extrabold text-30 sm:text-5xl">
                Projetos que saíram do papel.
            </h2>

            <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Algumas ideias que ganharam forma e se transformaram
                em soluções reais.
            </p>
        </div>

        {{-- Produtos --}}
        <div class="grid gap-x-10 gap-y-16 md:grid-cols-2 lg:gap-x-16 lg:gap-y-24">
            @foreach ($projects as $project)
                <x-ui.project-showcase :image="$project->image" :imageAlt="$project->image_alt" :category="$project->category" :year="$project->year"
                    :title="$project->title" :description="$project->description" :href="$project->application_url" :participants="$project->partners->map(
                        fn($partner) => [
                            'name' => $partner->name,
                            'image' => $partner->image,
                        ],
                    )" />
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="mt-12 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <x-ui.button href="" variant="secondary" class="w-56 justify-center whitespace-nowrap">
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

        {{-- Cabeçalho --}}
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

        {{-- Posts --}}
        <div class="space-y-6">
            @foreach ($posts as $post)
                <x-ui.posts :title="$post['title']" :excerpt="$post['excerpt']" :slug="$post['slug']" />
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            <x-ui.button href="#contato" variant="outline">
                Ver mais posts ☆
            </x-ui.button>
        </div>
    </x-layout.section>

    {{-- Contato --}}
    <x-layout.section id="contato">
        <x-ui.cube class="top-[10%] left-[6%]" :delay="1000" :size="30" />
        <x-ui.cube class="top-[20%] right-[7%]" :delay="2200" :size="42" />
        <x-ui.cube class="bottom-[12%] left-[20%]" :delay="1600" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />

        <div class="grid items-center gap-12 lg:grid-cols-[1.1fr_0.9fr]">

            {{-- Conteúdo --}}
            <div>

                <span class="text-sm font-bold uppercase text-10">
                    Contato
                </span>

                <h2 class="mt-2 max-w-2xl text-4xl font-extrabold text-30 sm:text-5xl">
                    Tem uma ideia?
                    <span class="italic text-10">Vamos tirar do papel.</span>
                </h2>

                <p class="mt-6 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                    Me conte um pouco sobre o que você precisa.
                    A partir disso, podemos entender o problema, conversar
                    sobre possibilidades e encontrar a melhor solução para o seu negócio.
                </p>

                <div class="mt-8 flex flex-col gap-3 text-sm text-30/75">
                    <div class="flex items-center gap-3">
                        <x-ui.check-icon />
                        <span>Conversa inicial sem compromisso</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <x-ui.check-icon />
                        <span>Soluções pensadas para sua necessidade</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <x-ui.check-icon />
                        <span>Orçamento alinhado ao projeto</span>
                    </div>
                </div>
            </div>

            {{-- Card de contato --}}
            <div class="relative rounded-2xl border border-30/20 bg-60 p-8 shadow-sm">

                <div class="mb-8">
                    <span class="text-xs font-bold uppercase tracking-wide text-10">
                        Vamos conversar
                    </span>

                    <h3 class="mt-2 text-2xl font-bold text-30">
                        Conte o que você tem em mente.
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-30/70">
                        Pode ser uma ideia, um problema ou até algo que você
                        ainda não sabe exatamente como resolver.
                    </p>
                </div>

                <a
                    href="https://api.whatsapp.com/send/?phone=554899341106"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group flex items-center justify-between rounded-xl border border-10/25 bg-10/5 p-5 transition hover:border-10/50 hover:bg-10/10"
                >

                    <div class="flex items-center gap-4">

                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-10/10 text-10">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                class="h-5 w-5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 11.5a8.38 8.38 0 0 1-9 8.5 8.5 8.5 0 0 1-4-.99L3 20l1.07-4.73A8.5 8.5 0 1 1 21 11.5Z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8.5 8.5c.2-.45.42-.46.68-.47h.58c.18 0 .37.07.47.35l.68 1.67c.08.2.06.37-.08.54l-.47.57c-.12.15-.25.3-.11.55.14.25.62 1.02 1.34 1.65.92.81 1.69 1.06 1.94 1.17.25.12.4.1.55-.07l.7-.82c.15-.18.3-.15.51-.09l1.62.77c.21.1.35.15.4.24.05.1.05.55-.13 1.06-.18.51-1.04.98-1.43 1.04-.37.06-.84.08-1.36-.08-.31-.1-.71-.23-1.22-.45-.51-.22-1.14-.52-1.78-.99-1.06-.77-1.78-1.72-2.03-2.07-.25-.35-.84-1.12-.84-2.14 0-1.02.53-1.52.73-1.82Z"
                                />
                            </svg>
                        </div>

                        <div>
                            <span class="block text-sm font-bold text-30">
                                WhatsApp
                            </span>
                            <span class="text-xs text-30/60">
                                Vamos conversar sobre seu projeto
                            </span>
                        </div>
                    </div>

                    <span class="text-sm font-bold text-10 transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </a>

                <x-ui.button
                    href="https://api.whatsapp.com/send/?phone=554899341106"
                    target="_blank"
                    class="mt-4 w-full justify-center"
                >
                    Solicitar orçamento
                </x-ui.button>

                <p class="mt-4 text-center text-xs text-30/50">
                    Responderei assim que possível.
                </p>
            </div>
        </div>
    </x-layout.section>

    {{-- FAQ --}}
    <x-layout.section id="faq">

        <x-ui.cube class="top-[8%] left-[7%]" :delay="900" :size="36" />
        <x-ui.cube class="top-[30%] right-[6%]" :delay="2200" :size="24" />
        <x-ui.cube class="top-[58%] left-[4%]" :delay="1400" :size="44" />
        <x-ui.cube class="bottom-[8%] right-[18%]" :delay="2800" :size="28" />

        {{-- Cabeçalho --}}
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

        {{-- Perguntas --}}
        <div x-data="{ open: null }" class="mx-auto max-w-6xl">
            <div class="border-t border-30/25">
                @foreach ($faqs as $index => $faq)
                    <x-ui.faq :question="$faq['question']" :index="$index">
                        {{ $faq['answer'] }}
                    </x-ui.faq>
                @endforeach
            </div>
        </div>

        {{-- CTA --}}
        <div class="mt-12 flex justify-center">
            <x-ui.button target="_blank" href="https://api.whatsapp.com/send/?phone=554899341106">
                Ainda com dúvidas?
            </x-ui.button>
        </div>

    </x-layout.section>

</x-layout.main>

<x-layout.main>

    <x-layout.section id="hero" class="mt-15">
        <x-ui.cube class="top-[12%] left-[8%]" :delay="800" :size="30" />
        <x-ui.cube class="top-[18%] right-[8%]" :delay="2000" :size="42" />
        <x-ui.cube class="bottom-[14%] left-[22%]" :delay="1400" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />
        <x-ui.cube class="top-[48%] right-[2%]" :delay="1800" :size="20" />

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

            <h1 class="font-heading text-4xl font-bold text-30 md:text-6xl">
                Construindo soluções digitais que
                <span class="italic text-10">geram resultados</span>.
            </h1>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 md:text-lg">
                Sou um artesão da web que transforma ideias em
                <span class="font-bold text-30">softwares elegantes</span>,
                feitos para gerar resultados.
            </p>

            <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:mt-10 sm:flex-row">
                <x-ui.button href="{{ route('projects.index') }}" variant="primary"
                    class="w-48 justify-center whitespace-nowrap">
                    Conhecer os produtos
                </x-ui.button>

                <x-ui.button href="{{ route('contact.index') }}" variant="secondary"
                    class="w-48 justify-center whitespace-nowrap">
                    Vamos conversar
                </x-ui.button>
            </div>
        </div>
    </x-layout.section>


    <x-layout.section id="services">
        <x-ui.cube class="top-[10%] left-[5%]" :delay="1200" :size="34" />
        <x-ui.cube class="top-[12%] right-[6%]" :delay="2400" :size="26" />
        <x-ui.cube class="top-[52%] left-[3%]" :delay="1800" :size="46" />
        <x-ui.cube class="top-[58%] right-[5%]" :delay="3000" :size="32" />
        <x-ui.cube class="bottom-[7%] left-[46%]" :delay="900" :size="22" />
        <x-ui.cube class="bottom-[28%] right-[2%]" :delay="1900" :size="20" />

        <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
            <span class="text-sm font-bold uppercase tracking-wider text-10">
                Serviços
            </span>

            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Soluções para cada necessidade.
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                Do primeiro contato à automação de processos, construo soluções digitais
                pensadas para o que seu negócio realmente precisa.
            </p>
        </div>

        <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">
            @foreach ($services as $service)
                <x-ui.service-card :tag="$service['tag']" :title="$service['title']" :explanation="$service['explanation']" />
            @endforeach
        </div>

        <div class="mt-10 flex justify-center sm:mt-12">
            <x-ui.button href="{{ route('contact.index') }}">
                Qual a solução ideal para meu problema?
            </x-ui.button>
        </div>
    </x-layout.section>


    <x-layout.section id="projects">
        <x-ui.cube class="top-[8%] left-[4%]" :delay="1000" :size="40" />
        <x-ui.cube class="top-[30%] right-[3%]" :delay="2300" :size="26" />
        <x-ui.cube class="top-[62%] left-[6%]" :delay="1700" :size="32" />
        <x-ui.cube class="bottom-[8%] right-[24%]" :delay="2900" :size="22" />
        <x-ui.cube class="top-[5%] right-[35%]" :delay="1600" :size="18" />

        <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
            <span class="text-sm font-bold uppercase tracking-wider text-10">
                Produtos
            </span>

            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Ideias transformadas em produtos.
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                Algumas ideias que ganharam forma e se transformaram em soluções reais.
            </p>
        </div>

        <div class="grid gap-x-10 gap-y-14 md:grid-cols-2 lg:gap-x-16 lg:gap-y-20">
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

        <div class="mt-10 flex justify-center sm:mt-12">
            <x-ui.button href="{{ route('projects.index') }}">
                Encontrar a solução ideal
            </x-ui.button>
        </div>
    </x-layout.section>


    {{-- Resultados --}}
    <x-layout.section id="results">
        <x-ui.cube class="top-[10%] right-[6%]" :delay="900" :size="30" />
        <x-ui.cube class="top-[38%] left-[4%]" :delay="2100" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[20%]" :delay="1600" :size="38" />
        <x-ui.cube class="top-[8%] left-[24%]" :delay="2500" :size="20" />
        <x-ui.cube class="bottom-[25%] left-[2%]" :delay="1300" :size="28" />

        <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
            <span class="text-sm font-bold uppercase tracking-wider text-10">
                Resultados
            </span>

            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Tecnologia que trabalha a favor do <span class="text-10">negócio.</span>
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                Soluções digitais pensadas para resolver problemas,
                simplificar processos e abrir novas possibilidades.
            </p>
        </div>

        <div class="mx-auto grid max-w-5xl gap-6 sm:grid-cols-2">
            <article
                class="relative h-full rounded-lg border-2 border-30/25 bg-60/50 px-6 py-8 text-center backdrop-blur transition-all duration-200 hover:-translate-y-1 hover:border-10 sm:py-10">

                <h3 class="mb-3 text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Menos tarefas manuais.
                </h3>

                <p class="text-base leading-7 text-30/75">
                    Automatize processos, reduza retrabalho e ganhe tempo
                    para se concentrar no que realmente importa.
                </p>
            </article>

            <article
                class="relative h-full rounded-lg border-2 border-30/25 bg-60/50 px-6 py-8 text-center backdrop-blur transition-all duration-200 hover:-translate-y-1 hover:border-10 sm:py-10">

                <h3 class="mb-3 text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Uma marca mais forte.
                </h3>

                <p class="text-base leading-7 text-30/75">
                    Apresente sua empresa com uma experiência digital
                    que transmite confiança e gera oportunidades.
                </p>
            </article>

            <article class="relative h-full rounded-lg border-2 border-30/25 bg-60/50 px-6 py-8 text-center backdrop-blur transition-all duration-200 hover:-translate-y-1 hover:border-10 sm:py-10">
                <h3 class="mb-3 text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Tudo mais organizado.
                </h3>

                <p class="text-base leading-7 text-30/75">
                    Reúna informações e ferramentas para facilitar
                    a operação e tomar decisões melhores.
                </p>
            </article>

            <article class="relative h-full rounded-lg border-2 border-30/25 bg-60/50 px-6 py-8 text-center backdrop-blur transition-all duration-200 hover:-translate-y-1 hover:border-10 sm:py-10">

                <h3 class="mb-3 text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Espaço para crescer.
                </h3>

                <p class="text-base leading-7 text-30/75">
                    Conecte sistemas, automatize novas etapas e evolua
                    suas ferramentas conforme o negócio cresce.
                </p>
            </article>

        </div>

        <div class="mt-10 flex justify-center sm:mt-12">
            <x-ui.button href="{{ route('contact.index') }}">
                Conversar sobre meu negócio
            </x-ui.button>
        </div>
    </x-layout.section>


    <x-layout.section id="process">
        <x-ui.cube class="top-[10%] right-[7%]" :delay="1100" :size="30" />
        <x-ui.cube class="top-[42%] left-[4%]" :delay="2500" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[18%]" :delay="1700" :size="38" />
        <x-ui.cube class="top-[6%] left-[12%]" :delay="2000" :size="22" />

        <div class="mx-auto mb-10 max-w-3xl text-center sm:mb-12">
            <span class="text-sm font-bold uppercase tracking-wider text-10">
                Como funciona
            </span>

            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Do primeiro contato ao que vem depois.
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-30/75 sm:text-lg">
                Cada projeto é construído com proximidade, clareza e atenção
                aos detalhes, desde a primeira conversa até muito depois da entrega.
            </p>
        </div>

        <div class="mx-auto max-w-6xl border-t border-30/25">
            <div class="border-b border-30/25 py-7 sm:py-8">
                <h3 class="text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Entender
                </h3>

                <p class="mt-3 max-w-3xl text-base leading-7 text-30/75">
                    Começo ouvindo. Entendo seu negócio, o contexto,
                    os objetivos e o problema que precisa ser resolvido.
                </p>
            </div>

            <div class="border-b border-30/25 py-7 sm:py-8">
                <h3 class="text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Definir
                </h3>

                <p class="mt-3 max-w-3xl text-base leading-7 text-30/75">
                    Transformo as necessidades em uma direção clara,
                    definindo o que faz sentido construir e como chegar ao resultado.
                </p>
            </div>

            <div class="border-b border-30/25 py-7 sm:py-8">
                <h3 class="text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Construir
                </h3>

                <p class="mt-3 max-w-3xl text-base leading-7 text-30/75">
                    Desenvolvo a solução com cuidado, valido cada etapa,
                    ajusto os detalhes e mantenho você próximo do processo.
                </p>
            </div>

            <div class="border-b border-30/25 py-7 sm:py-8">
                <h3 class="text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Entregar
                </h3>

                <p class="mt-3 max-w-3xl text-base leading-7 text-30/75">
                    Coloco tudo para funcionar, cuido dos últimos detalhes
                    e entrego uma solução pronta para fazer parte do seu negócio.
                </p>
            </div>

            <div class="border-b border-30/25 py-7 sm:py-8">
                <h3 class="text-xl font-extrabold tracking-tight text-30 sm:text-2xl">
                    Continuar
                </h3>

                <p class="mt-3 max-w-3xl text-base leading-7 text-30/75">
                    O cuidado não termina com a entrega. Continuo por perto,
                    oferecendo suporte, acompanhando o projeto e cuidando do
                    que vier depois.
                </p>
            </div>
        </div>

        <div class="mt-10 flex justify-center sm:mt-12">
            <x-ui.button href="{{ route('contact.index') }}">
                Vamos tirar sua ideia do papel
            </x-ui.button>
        </div>
    </x-layout.section>


    <x-layout.section id="posts">
        <x-ui.cube class="top-[8%] right-[6%]" :delay="700" :size="30" />
        <x-ui.cube class="top-[28%] left-[3%]" :delay="2100" :size="42" />
        <x-ui.cube class="top-[62%] right-[4%]" :delay="1500" :size="24" />
        <x-ui.cube class="bottom-[8%] left-[18%]" :delay="2700" :size="32" />
        <x-ui.cube class="top-[5%] left-[35%]" :delay="1900" :size="20" />

        <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
            <span class="text-sm font-bold uppercase tracking-wider text-10">
                Blog
            </span>

            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                O que aprendi construindo.
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                Sonhos criam ideias, ideias nos levam a caminhos, e cada caminho
                percorrido se transforma em experiência.
            </p>
        </div>

        <div class="mx-auto max-w-5xl space-y-5">
            @foreach ($posts as $post)
                <x-ui.posts :title="$post['title']" :excerpt="$post['excerpt']" :slug="$post['slug']" />
            @endforeach
        </div>

        <div class="mt-10 flex justify-center sm:mt-12">
            <x-ui.button href="{{ route('blog.index') }}" >
                Ver todos os artigos
            </x-ui.button>
        </div>
    </x-layout.section>


    <x-layout.section id="faq">
        <x-ui.cube class="top-[8%] left-[7%]" :delay="900" :size="36" />
        <x-ui.cube class="top-[30%] right-[6%]" :delay="2200" :size="24" />
        <x-ui.cube class="top-[58%] left-[4%]" :delay="1400" :size="44" />
        <x-ui.cube class="bottom-[8%] right-[18%]" :delay="2800" :size="28" />
        <x-ui.cube class="top-[7%] right-[35%]" :delay="1800" :size="20" />

        <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
            <span class="text-sm font-bold uppercase tracking-wider text-10">
                FAQ
            </span>

            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Ficou com alguma dúvida?
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-30/75 sm:text-lg">
                Algumas respostas para as dúvidas mais comuns antes de começar um projeto.
            </p>
        </div>

        <div x-data="{ open: null }" class="mx-auto max-w-5xl border-t border-30/25">
            @foreach ($faqs as $index => $faq)
                <x-ui.faq :question="$faq['question']" :index="$index">
                    {{ $faq['answer'] }}
                </x-ui.faq>
            @endforeach
        </div>

        <div class="mt-10 flex justify-center sm:mt-12">
            <x-ui.button href="{{ route('contact.index') }}">
                Ainda tem dúvidas? Vamos conversar
            </x-ui.button>
        </div>
    </x-layout.section>
</x-layout.main>

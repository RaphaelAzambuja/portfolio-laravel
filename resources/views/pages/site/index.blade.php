<x-layout.main>

    <x-layout.section id="hero" class="mt-16 md:mt-32">
        <x-ui.cube class="top-[12%] left-[8%]" :delay="800" :size="30" />
        <x-ui.cube class="top-[18%] right-[8%]" :delay="2000" :size="42" />
        <x-ui.cube class="bottom-[14%] left-[22%]" :delay="1400" :size="24" />
        <x-ui.cube class="bottom-[10%] right-[24%]" :delay="2800" :size="34" />
        <x-ui.cube class="top-[48%] right-[2%]" :delay="1800" :size="20" />

        <div class="flex flex-col gap-8">
            <div>
                <h1 class="font-heading text-5xl font-bold text-30 md:text-7xl">
                    Escalando seu negócio com <span class="italic text-10">soluções digitais</span>
                </h1>

                <p class="mt-4 max-w-3xl text-base leading-7 text-30/75 md:text-lg">
                    Sou um artesão da web que transforma ideias em
                    <span class="font-bold text-30">softwares elegantes</span>,
                    feitos para <span class="font-bold text-30">impulsionar seu negócio</span> e <span
                        class="font-bold text-30">gerar resultados</span>.
                </p>
            </div>

            <x-ui.button href="{{ route('contact.index') }}" variant="primary" class="w-48" size="lg">
                Vamos conversar
            </x-ui.button>
        </div>
    </x-layout.section>


    {{-- Aqui vou colocar carrossel de clientes quando estiver com uns 5 ou 6 --}}


    <x-layout.section id="services">
        <x-ui.cube class="top-[10%] left-[5%]" :delay="1200" :size="34" />
        <x-ui.cube class="top-[12%] right-[6%]" :delay="2400" :size="26" />
        <x-ui.cube class="top-[52%] left-[3%]" :delay="1800" :size="46" />
        <x-ui.cube class="top-[58%] right-[5%]" :delay="3000" :size="32" />
        <x-ui.cube class="bottom-[7%] left-[46%]" :delay="900" :size="22" />

        <div>
            <div class="mb-10 max-w-4xl sm:mb-12">
                <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                    O que eu faço
                </h2>

                <p class="mt-4 text-base leading-7 text-30/75 sm:text-lg">
                    Estou preparado para cada necessidade. Do primeiro contato à automação de processos, construo
                    soluções digitais pensadas para o que seu negócio realmente precisa.
                </p>
            </div>

        </div>
        <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">
            @foreach ($services as $service)
                <x-ui.service-card :tag="$service['tag']" :title="$service['title']" :explanation="$service['explanation']" />
            @endforeach
        </div>
    </x-layout.section>


    <x-layout.section id="cases">
        <x-ui.cube class="top-[8%] left-[4%]" :delay="1000" :size="40" />
        <x-ui.cube class="top-[30%] right-[3%]" :delay="2300" :size="26" />
        <x-ui.cube class="top-[62%] left-[6%]" :delay="1700" :size="32" />
        <x-ui.cube class="bottom-[8%] right-[24%]" :delay="2900" :size="22" />
        <x-ui.cube class="top-[5%] right-[35%]" :delay="1600" :size="18" />

        <div class="mb-10 sm:mb-12">
            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Cases
            </h2>

            <p class="mt-4 max-w-4xl text-base leading-7 text-30/75 sm:text-lg">
                Algumas ideias que ganharam forma, se tornaram soluções e transformaram sonhos em resultados.
            </p>
        </div>

        <div class="grid gap-x-10 gap-y-14 md:grid-cols-2 lg:gap-x-16 lg:gap-y-20">
            @foreach ($projects as $project)
                <x-ui.project-showcase :image="$project->image" :imageAlt="$project->image_alt" :category="$project->category" :year="$project->year"
                    :title="$project->title" :description="$project->description" :href="$project->application_url" />
            @endforeach
        </div>

        <div class="mt-8 flex w-full max-w-sm flex-col items-center gap-4 md:max-w-none md:flex-row">
            <x-ui.button href="{{ route('projects.index') }}">
                Ver mais cases
            </x-ui.button>

            <x-ui.button variant="secondary" href="{{ route('contact.index') }}">
                Encontrar a solução ideal
            </x-ui.button>
        </div>
    </x-layout.section>


    <x-layout.section id="posts">
        <x-ui.cube class="top-[8%] right-[6%]" :delay="700" :size="30" />
        <x-ui.cube class="top-[28%] left-[3%]" :delay="2100" :size="42" />
        <x-ui.cube class="top-[62%] right-[4%]" :delay="1500" :size="24" />
        <x-ui.cube class="bottom-[8%] left-[18%]" :delay="2700" :size="32" />
        <x-ui.cube class="top-[5%] left-[35%]" :delay="1900" :size="20" />

        <div class="mb-10 max-w-7xl sm:mb-12">
            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                O que aprendi construindo
            </h2>

            <p class="mt-4 text-base max-w-4xl leading-7 text-30/75 sm:text-lg">
                Sonhos criam ideias, ideias nos levam a caminhos, e cada caminho
                percorrido se transforma em experiência.
            </p>
        </div>

        <div class="mx-auto max-w-7xl space-y-5">
            @foreach ($posts as $post)
                <x-ui.posts :title="$post['title']" :excerpt="$post['excerpt']" :slug="$post['slug']" />
            @endforeach
        </div>

        <div class="mt-10 flex sm:mt-12">
            <x-ui.button href="{{ route('blog.index') }}">
                Ver mais artigos
            </x-ui.button>
        </div>
    </x-layout.section>


    <x-layout.section id="faq">
        <x-ui.cube class="top-[8%] left-[7%]" :delay="900" :size="36" />
        <x-ui.cube class="top-[30%] right-[6%]" :delay="2200" :size="24" />
        <x-ui.cube class="top-[58%] left-[4%]" :delay="1400" :size="44" />
        <x-ui.cube class="bottom-[8%] right-[18%]" :delay="2800" :size="28" />
        <x-ui.cube class="top-[7%] right-[35%]" :delay="1800" :size="20" />

        <div class="mx-auto mb-10 max-w-7xl sm:mb-12">
            <h2 class="mt-2 font-heading text-3xl font-extrabold tracking-tight text-30 sm:text-4xl lg:text-5xl">
                Ficou com alguma dúvida?
            </h2>

            <p class="mx-auto mt-4 text-base leading-7 text-30/75 sm:text-lg">
                Algumas respostas para as dúvidas mais comuns antes de começar um projeto.
            </p>
        </div>

        <div x-data="{ open: null }" class="mx-auto max-w-7xl border-t border-30/25">
            @foreach ($faqs as $index => $faq)
                <x-ui.faq :question="$faq['question']" :index="$index">
                    {{ $faq['answer'] }}
                </x-ui.faq>
            @endforeach
        </div>

        <div class="mt-10 flex sm:mt-12">
            <x-ui.button href="{{ route('contact.index') }}">
                Ainda tem dúvidas? Vamos conversar
            </x-ui.button>
        </div>
    </x-layout.section>
</x-layout.main>

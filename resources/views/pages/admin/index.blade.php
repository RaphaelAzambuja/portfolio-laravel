<x-layout.main :header="false" :footer="false">
    <x-layout.section>
        <div class="mx-auto w-full max-w-6xl py-10 sm:py-12">
            <header class="mb-10 flex items-center justify-between gap-6">
                <div>
                    <h1 class="font-heading text-2xl font-bold text-30 sm:text-3xl">
                        Painel administrativo
                    </h1>

                    <p class="mt-2 text-sm text-30/60">
                        Gerencie o conteúdo do site.
                    </p>
                </div>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf

                    <x-ui.button type="submit">
                        Sair
                    </x-ui.button>
                </form>
            </header>

            <section>
                <div class="mb-5">
                    <h2 class="font-heading text-lg font-semibold text-30">
                        Módulos
                    </h2>

                    <p class="mt-1 text-sm text-30/60">
                        Selecione uma área para gerenciar.
                    </p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <a
                        href="#"
                        class="group rounded-lg border border-30/15 p-5 transition-colors hover:border-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-10"
                    >
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-heading text-base font-semibold text-30">
                                Projetos
                            </h3>

                            <span aria-hidden="true" class="text-30/40 transition-colors group-hover:text-10">
                                ↗
                            </span>
                        </div>

                        <p class="text-sm leading-6 text-30/65">
                            Gerencie os projetos cadastrados no site.
                        </p>
                    </a>

                    <a
                        href="#"
                        class="group rounded-lg border border-30/15 p-5 transition-colors hover:border-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-10"
                    >
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-heading text-base font-semibold text-30">
                                Artigos
                            </h3>

                            <span aria-hidden="true" class="text-30/40 transition-colors group-hover:text-10">
                                ↗
                            </span>
                        </div>

                        <p class="text-sm leading-6 text-30/65">
                            Crie e edite os artigos publicados no site.
                        </p>
                    </a>

                    <a
                        href="{{ route('admin.services.index') }}"
                        class="group rounded-lg border border-30/15 p-5 transition-colors hover:border-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-10"
                    >
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-heading text-base font-semibold text-30">
                                Serviços
                            </h3>

                            <span aria-hidden="true" class="text-30/40 transition-colors group-hover:text-10">
                                ↗
                            </span>
                        </div>

                        <p class="text-sm leading-6 text-30/65">
                            Atualize os serviços apresentados no site.
                        </p>
                    </a>

                    <a
                        href="#"
                        class="group rounded-lg border border-30/15 p-5 transition-colors hover:border-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-10"
                    >
                        <div class="mb-4 flex items-center justify-between">
                            <h3 class="font-heading text-base font-semibold text-30">
                                Configurações
                            </h3>

                            <span aria-hidden="true" class="text-30/40 transition-colors group-hover:text-10">
                                ↗
                            </span>
                        </div>

                        <p class="text-sm leading-6 text-30/65">
                            Gerencie as informações gerais do site.
                        </p>
                    </a>
                </div>
            </section>

            <footer class="mt-12 border-t border-30/10 pt-5">
                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 text-sm text-30/60 transition-colors hover:text-10"
                >
                    <span aria-hidden="true">←</span>
                    Visualizar site
                </a>
            </footer>
        </div>
    </x-layout.section>
</x-layout.main>

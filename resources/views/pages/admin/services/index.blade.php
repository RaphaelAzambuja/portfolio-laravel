<x-layout.main :header="false" :footer="false">
    <x-layout.section>
        <div class="mx-auto w-full max-w-6xl py-10 sm:py-12">
            <header class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="font-heading text-2xl font-bold text-30 sm:text-3xl">
                        Serviços
                    </h1>

                    <p class="mt-2 text-sm text-30/60">
                        Gerencie os serviços cadastrados no site.
                    </p>
                </div>

                <x-ui.button>
                    <a href="{{ route('admin.services.create') }}">
                        + Novo serviço
                    </a>
                </x-ui.button>
            </header>

            @if (session('success'))
                <div class="mb-6 rounded-lg border border-green-600/20 bg-green-50 px-4 py-3 text-sm text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-hidden rounded-lg border border-30/15">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="border-b border-30/15 bg-30/5 text-30/70">
                            <tr>
                                <th scope="col" class="px-5 py-4 font-semibold">Título</th>
                                <th scope="col" class="px-5 py-4 font-semibold">Tag</th>
                                <th scope="col" class="px-5 py-4 font-semibold">Explicação</th>
                                <th scope="col" class="px-5 py-4 text-right font-semibold">Ações</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-30/10">
                            @forelse ($services as $service)
                                <tr class="transition-colors hover:bg-30/5">
                                    <td class="whitespace-nowrap px-5 py-4 font-medium text-30">
                                        {{ $service->title }}
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4">
                                        <span class="inline-flex rounded-md bg-30/5 px-2.5 py-1 text-xs font-medium text-30/70">
                                            {{ $service->tag }}
                                        </span>
                                    </td>

                                    <td class="min-w-64 max-w-sm px-5 py-4 text-30/65">
                                        <p class="line-clamp-2 leading-6">
                                            {{ $service->explanation }}
                                        </p>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4">
                                        <div class="flex items-center justify-end gap-4">
                                            <a
                                                href="{{ route('admin.services.edit', $service) }}"
                                                class="font-medium text-30/70 transition-colors hover:text-10"
                                            >
                                                Editar
                                            </a>

                                            <form
                                                action="{{ route('admin.services.destroy', $service) }}"
                                                method="POST"
                                                onsubmit="return confirm('Deseja realmente excluir este serviço?')"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="font-medium text-red-600 transition-colors hover:text-red-800"
                                                >
                                                    Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-5 py-16 text-center">
                                        <h3 class="font-medium text-30">
                                            Nenhum serviço cadastrado
                                        </h3>

                                        <p class="mt-2 text-sm text-30/60">
                                            Cadastre seu primeiro serviço para começar a gerenciar o conteúdo.
                                        </p>

                                        <div class="mt-5">
                                            <x-ui.button>
                                                <a href="{{ route('admin.services.create') }}">
                                                    + Novo serviço
                                                </a>
                                            </x-ui.button>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="mt-10 border-t border-30/10 pt-5">
                <a
                    href="{{ route('admin.index') }}"
                    class="inline-flex items-center gap-2 text-sm text-30/60 transition-colors hover:text-10"
                >
                    <span aria-hidden="true">←</span>
                    Voltar ao painel
                </a>
            </footer>
        </div>
    </x-layout.section>
</x-layout.main>

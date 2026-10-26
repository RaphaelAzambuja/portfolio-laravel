<x-layout.main :header="false" :footer="false">
    <x-layout.section>
        <div class="mx-auto w-full max-w-md">
            <a
                href="{{ route('home') }}"
                class="mb-8 inline-flex items-center gap-2 text-sm text-30/60 transition hover:text-10"
            >
                <span aria-hidden="true">←</span>
                Voltar ao portfólio
            </a>

            <div class="mb-8">
                <h1 class="font-heading text-3xl font-bold tracking-tight text-30 sm:text-4xl">
                    Entrar na sua conta
                </h1>

                <p class="mt-2 text-sm leading-6 text-30/60">
                    Informe suas credenciais para acessar o painel administrativo.
                </p>
            </div>

            <form
                action="{{ route('admin.login.store') }}"
                method="POST"
                class="space-y-5"
            >
                @csrf

                <x-inputs.input
                    name="email"
                    label="E-mail"
                    type="email"
                    placeholder="nome@exemplo.com"
                />

                <x-inputs.input
                    name="password"
                    label="Senha"
                    type="password"
                    placeholder="Digite sua senha"
                />

                @error('email')
                    <p class="-mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex items-center justify-between">
                    <label class="flex cursor-pointer items-center gap-2 text-sm text-30/70">
                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                            class="size-4 rounded border-30/30 accent-10 focus:ring-10"
                        >
                        Manter conectado
                    </label>
                </div>

                <x-ui.button
                    type="submit"
                    class="w-full justify-center"
                >
                    Entrar
                </x-ui.button>
            </form>

            <div class="mt-8 border-t border-30/10 pt-5">
                <p class="text-xs leading-5 text-30/50">
                    Acesso restrito a usuários autorizados.
                </p>
            </div>
        </div>
    </x-layout.section>
</x-layout.main>

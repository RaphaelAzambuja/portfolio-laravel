<x-layout.main :header="false" :footer="false">
    <x-layout.section>

        <form action="{{ route('admin.login.store') }}" method="POST" class="space-y-6">
            @csrf

            <x-inputs.input name="email" label="E-mail" type="email" placeholder="Seu e-mail" />

            <x-inputs.input name="password" label="Senha" type="password" placeholder="Sua senha" />

            @error('email')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <label class="flex items-center gap-2 text-sm">
                <input type="checkbox" name="remember" value="1">
                Manter conectado
            </label>

            <x-ui.button type="submit" class="w-full justify-center">
                Entrar →
            </x-ui.button>
        </form>

    </x-layout.section>
</x-layout.main>

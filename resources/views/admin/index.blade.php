
<form action="{{ route('admin.logout') }}" method="POST">
    @csrf

    <x-ui.button type="submit">
        Sair →
    </x-ui.button>
</form>

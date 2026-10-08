<?php

use Livewire\Component;

new class extends Component {

    public String $name = '';
    public String $phone = '';
    public String $solution = '';
    public String $message = '';

    public function makeMessage()
    {
        $name = $this->name;
        $phone = $this->phone;
        $solution = $this->solution;
        $message = $this->message;

        $whatsappMessage = "Um ótimo dia, Raphael! Tudo joia?\n\n"
                            . "Sou o {$name}. Dei uma olhada no teu portfólio e me interessei pelo teu trabalho. Queria saber mais sobre os preços para uma aplicação de {$solution}.\n\n"
                            . "{$message}";

        $url = 'https://wa.me/5548999341106?text=' . urlencode($whatsappMessage);

        $this->dispatch('open-whatsapp', url: $url);
    }
};
?>

<form wire:submit='makeMessage' class="space-y-6">

    <x-forms.inputs.input
    name="name"
    label="Seu nome"
    placeholder="Como posso te chamar?"

    wire:model='name'
    />

    <x-forms.inputs.phone
        name="phone"
        label="WhatsApp"

        wire:model='phone'
        />

        <x-forms.inputs.select
        name="solution"
        label="O que você precisa?"

        wire:model='solution'
        >
        <option value="" selected disabled>
            Selecione uma opção
        </option>

        <option value="site">
            Site institucional
        </option>

        <option value="landing-page">
            Landing page
        </option>

        <option value="loja">
            Loja online
        </option>

        <option value="sistema">
            Sistema web
        </option>

        <option value="aplicativo">
            Aplicativo
        </option>

        <option value="automacao">
            Automação / Integração
        </option>

        <option value="outro">
            Outro
        </option>

        <option value="nao-sei">
            Ainda não sei
        </option>
    </x-forms.inputs.select>

    <x-forms.inputs.textarea
    name="message"
    label="Conte um pouco sobre a ideia"
    rows="6"
        placeholder="O que você gostaria de construir, resolver ou melhorar?"

        wire:model='message'
        />

        <x-ui.button type="submit" class="w-full justify-center">
            Enviar pelo WhatsApp →
        </x-ui.button>

    <p class="text-center text-xs leading-5 text-30/50">
        Ao enviar, você será direcionado para o WhatsApp
        com as informações preenchidas.
    </p>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('open-whatsapp', ({ url }) => {
                window.open(url, '_blank');
            });
        });
    </script>
</form>

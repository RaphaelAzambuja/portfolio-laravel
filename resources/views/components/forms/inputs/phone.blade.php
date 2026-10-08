@props([
    'name' => 'phone',
    'label' => 'Telefone',
    'id' => null,
])

@php
    $id ??= $name;
@endphp

<div>
    <label
        for="{{ $id }}"
        class="mb-2 block text-sm font-bold tracking-tight text-30"
    >
        {{ $label }}
    </label>

    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="tel"
        inputmode="numeric"
        autocomplete="tel"
        placeholder="(00) 00000-0000"
        maxlength="15"
        x-data
        x-on:input="
            let value = $el.value.replace(/\D/g, '');

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            if (value.length <= 10) {
                value = value.replace(/^(\d{2})(\d)/, '($1) $2');
                value = value.replace(/(\d{4})(\d)/, '$1-$2');
            } else {
                value = value.replace(/^(\d{2})(\d)/, '($1) $2');
                value = value.replace(/(\d{5})(\d)/, '$1-$2');
            }

            $el.value = value;
        "
        {{ $attributes->merge([
            'class' => '
                w-full
                rounded-md
                border
                border-30/15
                bg-60
                px-4
                py-3.5
                text-sm
                font-medium
                text-30
                outline-none
                transition-all
                duration-200
                placeholder:text-30/35
                hover:border-30/30
                focus:border-10/60
                focus:ring-4
                focus:ring-10/10
            ',
        ]) }}
    >
</div>

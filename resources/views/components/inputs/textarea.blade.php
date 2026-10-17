@props([
    'name',
    'label',
    'id' => null,
    'rows' => 6,
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

    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        {{ $attributes->merge([
            'class' => '
                w-full
                resize-none
                rounded-md
                border
                border-30/15
                bg-60
                px-4
                py-3.5
                text-sm
                font-medium
                leading-6
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
    >{{ $slot }}</textarea>
</div>

@props([
    'id' => null,
])

<section
    @if ($id)
        id="{{ $id }}"
    @endif
    {{ $attributes->merge([
        'class' => 'site-section relative overflow-hidden',
    ]) }}
>
    <div class="site-container">
        {{ $slot }}
    </div>
</section>

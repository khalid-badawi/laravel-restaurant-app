@props(['type' => 'primary'])

    @php
        $classes = [
        'primary' => 'primary-button',
        'secondary' => 'secondary-button',
        ];
    @endphp

    <a {{ $attributes->merge(['class' => $classes[$type]]) }}>
        {{ $slot }}
    </a>

    @vite(['resources/css/components/custom-button.css'])

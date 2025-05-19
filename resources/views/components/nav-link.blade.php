@props(['active' => false, 'type' => 'a'])

@php
    $activeClasses = 'bg-gray-900 text-white';
    $inActiveClasses = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    $normalClasses = 'rounded-md px-3 py-2 text-sm font-medium';
    $finalClasses = ($active ? $activeClasses : $inActiveClasses) . ' ' . $normalClasses;
@endphp

@if ($type === 'a')
    <a class="{{ $finalClasses }}" {{ $attributes }}> {{ $slot }} </a>
@elseif ($type === 'b')
    <button class="{{ $finalClasses }}" {{ $attributes }}> {{ $slot }} </button>
@endif

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-[#0035663D] focus:border-[#001E3DD9] focus:ring-[#0035663D] rounded-md shadow-sm']) !!}>

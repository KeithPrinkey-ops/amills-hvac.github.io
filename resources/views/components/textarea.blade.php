@props(['name', 'label', 'disabled' => false])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <textarea id="{{ $name }}"
              name="{{ $name }}"
              {{ $disabled ? 'disabled' : '' }}
              {!! $attributes->merge(['class' => 'mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500']) !!}
              required>{{ $slot }}</textarea>
</div>

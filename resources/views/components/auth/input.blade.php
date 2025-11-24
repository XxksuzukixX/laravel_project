@props([
    'label',
    'id',
    'type' => 'text',
    'placeholder' => '',
    'displayError' => true 
])
<div class="space-y-1">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input 
        id="{{ $id }}" 
        name="{{ $id }}" 
        type="{{ $type }}" 
        placeholder="{{ $placeholder }}" 
        {{ $attributes->merge([
            'class' => 'w-full rounded-md border border-gray-200 px-3 py-2 shadow-sm focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500'
        ])}}
    >
    @if ($displayError)
        @error($id)
            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
        @enderror
    @endif
</div>
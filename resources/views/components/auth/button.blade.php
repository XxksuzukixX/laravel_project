<button {{ $attributes->merge(['class' => 'w-full rounded-lg bg-gray-800 text-white py-2 font-medium shadow hover:shadow-md focus:ring-2 focus:ring-gray-300']) }}>
{{ $slot }}
</button>
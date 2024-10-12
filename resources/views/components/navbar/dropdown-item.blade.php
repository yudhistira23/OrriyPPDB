<div {{ $attributes->merge(['class' => 'block px-4 py-2 rounded-md']) }}>
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => request()->fullUrlIs(url($href)) ? 'bg-gray-600 text-white px-3 py-2 rounded-md shadow-lg' : 'text-gray-300 hover:bg-gray-700 hover:text-white hover:px-3 py-2 rounded-md hover:shadow-lg']) }}>
        {{ $slot }}
    </a>
</div>

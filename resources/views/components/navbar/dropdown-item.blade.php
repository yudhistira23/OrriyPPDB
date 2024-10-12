<a
    {{ $attributes->merge(['class' => request()->fullUrlIs(url($href)) ? 'bg-gray-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white']) }}>
    {{ $slot }}
</a>

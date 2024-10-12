<a
    {{ $attributes->merge([
        'class' => request()->fullUrlIs(url($href))
            ? 'bg-gray-600 text-white rounded-md px-3 py-3 text-sm font-medium'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-3 text-sm font-medium',
    ]) }}>
    {{ $slot }}
</a>

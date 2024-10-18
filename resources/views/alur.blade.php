<x-app-layout>
    <x-slot name="heading">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alur
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="bg-white divide-y divide-gray-200">
                            <div class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{ $alur[0]->flow_name }}
                                </div>
                            </div>
                            <div class="px-6 py-4 whitespace-no-wrap">
                                <img src="{{ Storage::url($alur[0]->image_path) }}" alt=""
                                    class="mx-auto w-full" style="max-width: 100vw;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

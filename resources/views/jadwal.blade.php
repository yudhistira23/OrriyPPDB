<x-app-layout>

    <x-slot name="heading">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Jadwal
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2 bg-gray-200">Kegiatan</th>
                    <th class="border px-4 py-2 bg-gray-200">Lokasi</th>
                    <th class="border px-4 py-2 bg-gray-200">Waktu</th>
                    <th class="border px-4 py-2 bg-gray-200">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                    <tr>
                        <td class="border px-4 py-2">{{ $jadwal->kegiatan }}</td>
                        <td class="border px-4 py-2">{{ $jadwal->lokasi }}</td>
                        <td class="border px-4 py-2">{{ $jadwal->waktu }}</td>
                        <td class="border px-4 py-2">
                            <span
                                style="display: inline-block; width: 15px; height: 15px; border-radius: 50%; background-color: {{ $jadwal->catatan }};">
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

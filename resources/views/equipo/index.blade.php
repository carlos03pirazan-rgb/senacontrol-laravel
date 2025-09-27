<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white over   flow-hidden shadow-xl sm:rounded-lg">
                <h1>Equipo</h1>

                <x-button onclick="location.href='{{ route('equipo.create') }}'">Registrar</x-button>
            </div>
        </div>
    </div>
</x-app-layout>
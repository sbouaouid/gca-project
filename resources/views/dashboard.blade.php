<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <form method="GET" action="{{ route('client.create') }}">
                        @csrf
                        <button type="submit">Ajouter un client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  

    @foreach ($clients as $client)
    <div class="py-3">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <form method="GET" action="{{ route('client.show', $client->id) }}">
                        @csrf
                        <button type="submit">{{$client->Nom}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>

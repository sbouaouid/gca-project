<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fiche client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <h2> Nom : {{$client->nom}} </h2>
                    <ul>
                        <li>Adresse : {{$client->adresse}}</li>
                        <li>Ville : {{$client->ville}} </li>
                        <li>Téléphone 1 : {{$client->telephone1}} </li>
                        <li>Téléphone 2 : 
                            @if ( $client->telephone2 == NULL )
                                Indisponible </li>
                            @else
                            {{$client->telephone2}} </li>
                            @endif
                        <li>Fax : 
                            @if ($client->fax == NULL)
                                Indisponible </li>
                            @else
                                {{$client->fax}} </li>
                            @endif
                        <li>Email : {{$client->email}} </li>
                        <li>Observation client : 
                            @if ($client->observation == NULL)
                                Indisponible </li>
                            @else
                                {{$client->observation}} </li>
                            @endif
                        <li>Type de client : {{$client->type}} </li>    
                    </ul>
                    <div class="flex items-center justify-end mt-4">
                        <form method="GET" action="{{ route('client.edit', $client)}}">
                            @csrf
                            <x-button class="ml-4">
                                {{ __('Modifier') }}
                            </x-button>
                        </form>
                     
                        <form method="POST" action="{{ route('client.delete', $client)}}">
                            @csrf
                            @method('PUT')
                            <x-button class="ml-4">
                                {{ __('Supprimer') }}
                            </x-button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
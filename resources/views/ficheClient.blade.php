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
                    <h2> {{$client->Nom}} </h2>
                    <ul>
                        <li>Adresse : {{$client->Adresse}}</li>
                        <li>Ville : {{$client->Ville}} </li>
                        <li>Téléphone 1 : {{$client->Téléphone1}} </li>
                        <li>Téléphone 2 : 
                            @if ( $client->Téléphone2 == NULL )
                                Indisponible </li>
                            @else
                            {{$client->Téléphone2}} </li>
                            @endif
                        <li>Fax : 
                            @if ($client->Fax == NULL)
                                Indisponible </li>
                            @else
                                {{$client->Fax}} </li>
                            @endif
                        <li>Email : {{$client->Email}} </li>
                        <li>Observation client : 
                            @if ($client->Observation_client == NULL)
                                Indisponible </li>
                            @else
                                {{$client->Observation_client}} </li>
                            @endif
                        <li>Type de client : {{$client->type}} </li>    
                    </ul>
                    <div class="flex items-center justify-end mt-4">
                        <form method="GET" action="{{route('client.edit', $client)}}">
                            @csrf
                            <x-button class="ml-4">
                                {{ __('Modifier') }}
                            </x-button>
                        </form>
                     
                        <form method="GET" action="{{route('client.delete', $client)}}">
                            @csrf
                            @method('DELETE')
                            <x-button class="ml-4 delete-confirm">
                                {{ __('Supprimer') }}
                            </x-button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>



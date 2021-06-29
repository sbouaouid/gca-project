<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    
                                <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('client.update', $client) }}">
                        @csrf
                        @method('PATCH')
                        <!-- Nom -->
                        <div>
                            <x-label for="nom" :value="__('Nom')" />
                            <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" value="{{$client->Nom}}" placeholder="Nom" required autofocus />
                        </div >

                        <!-- Addresse -->
                        <div class="mt-4">
                            <x-label for="adresse" :value="__('Adresse')" />
                            <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" value="{{$client->Adresse}}" placeholder="Adresse" required />
                        </div>

                        <!-- Ville -->
                        <div class="mt-4">
                            <x-label for="ville" :value="__('Ville')" />
                            <x-input id="ville" class="block mt-1 w-full" type="text" name="ville" value=" {{$client->Ville}} " placeholder="Ville"/>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Adresse email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value=" {{$client->Email}} " placeholder="nom@gmail.com" required />
                        </div>

                        <!-- Téléphone 1-->
                        <div class="mt-4">
                            <x-label for="telephone1" :value="__('Téléphone 1')" />
                            <x-input id="telephone1" class="block mt-1 w-full" type="tel" name="telephone1" value=" {{$client->Téléphone1}} " placeholder="0601020304" required />
                        </div>

                        <!-- Téléphone 2 -->
                        <div class="mt-4">
                            <x-label for="telephone2" :value="__('Téléphone 2')" />
                            <x-input id="telephone2" class="block mt-1 w-full" type="tel" name="telephone2" value="{{$client->Téléphone2}}" placeholder="0600112233" />
                        </div>

                        <!-- Fax -->
                        <div class="mt-4">
                            <x-label for="fax" :value="__('Fax')" />
                            <x-input id="fax" class="block mt-1 w-full" type="tel" name="fax" value="{{$client->Fax}}" placeholder="0791820019" />
                        </div>

                        <!-- Observatin client -->
                        <div class="mt-4">
                            <x-label for="observation" :value="__('Observation client')" />
                            <textarea id="observation" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="observation" rows="5" cols="33">{{$client->Observation_client}}</textarea>
                        </div>

                        <!-- Type -->
                        <div class="mt-4">
                            @if ($client->type=='particulier')
                                <x-input id="particulier" checked type="radio" name="typeClient" value="particulier" required/>
                                <label for="particulier" class="font-medium text-sm text-gray-700">Particulier</label>

                                <x-input id="societe" type="radio" name="typeClient" value="societe"/>
                                <label for="societe" class="font-medium text-sm text-gray-700">Société</label>
                            @else
                                <x-input id="particulier" type="radio" name="typeClient" value="particulier" required/>
                                <label for="particulier" class="font-medium text-sm text-gray-700">Particulier</label>

                                <x-input id="societe" checked type="radio" name="typeClient" value="societe"/>
                                <label for="societe" class="font-medium text-sm text-gray-700">Société</label>
                            @endif                         
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Appliquer les modifications') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

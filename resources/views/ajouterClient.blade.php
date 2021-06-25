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

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nom -->
                        <div>
                            <x-label for="nom" :value="__('Nom')" />
                            <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" placeholder="Nom" required autofocus />
                        </div >

                        <!-- Addresse -->
                        <div class="mt-4">
                            <x-label for="adresse" :value="__('Adresse')" />
                            <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" placeholder="Adresse" required />
                        </div>

                        <!-- Ville -->
                        <div class="mt-4">
                            <x-label for="ville" :value="__('Ville')" />
                            <x-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" placeholder="Ville" required />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Adresse email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="nom@gmail.com" required />
                        </div>

                        <!-- Téléphone 1-->
                        <div class="mt-4">
                            <x-label for="telephone1" :value="__('Téléphone 1')" />
                            <x-input id="telephone1" class="block mt-1 w-full" type="tel" name="telephone1" :value="old('telephone1')" placeholder="0601020304" required />
                        </div>

                        <!-- Téléphone 2 -->
                        <div class="mt-4">
                            <x-label for="telephone2" :value="__('Téléphone 2')" />
                            <x-input id="telephone2" class="block mt-1 w-full" type="tel" name="telephone2" :value="old('telephone2')" placeholder="0600112233" />
                        </div>

                        <!-- Fax -->
                        <div class="mt-4">
                            <x-label for="fax" :value="__('Fax')" />
                            <x-input id="fax" class="block mt-1 w-full" type="tel" name="fax" :value="old('fax')" placeholder="0791820019" />
                        </div>

                        <!-- Type -->
                        <div class="mt-4">
                                <x-input id="particulier" type="radio" name="typeClient" value="particulier" required/>
                                <label for="particulier" class="font-medium text-sm text-gray-700">Particulier</label>
                        
                                <x-input id="societe" type="radio" name="typeClient" value="societe"/>
                                <label for="societe" class="font-medium text-sm text-gray-700">Société</label>               
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Ajouter') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

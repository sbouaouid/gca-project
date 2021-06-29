<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des dossiers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    
                                <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('dossier.store') }}">
                        @csrf

                        <!-- Ref Cabinet -->
                        <div>
                            <x-label for="ref_cabinet" :value="__('Ref_cabinet')" />
                            <x-input id="ref_cabinet" class="block mt-1 w-full" type="text" name="ref_cabinet" :value="old('ref_cabinet')" required autofocus />
                        </div >

                        <!-- Type dossier -->
                        <div class="mt-4">
                            <x-label for="type_dossier" :value="__('Type dossier')" />
                            <x-input id="type_dossier" class="block mt-1 w-full" type="text" name="type_dossier" :value="old('type_dossier')" required />
                        </div>

                        <!-- Type sujet -->
                        <div class="mt-4">
                            <x-label for="type_sujet" :value="__('Type sujet')" />
                            <x-input id="type_sujet" class="block mt-1 w-full" type="text" name="type_sujet" :value="old('type_sujet')" required />
                        </div>

                        <!-- V_ref -->
                        <div class="mt-4">
                            <x-label for="v_ref" :value="__('V_Ref')" />
                            <x-input id="v_ref" class="block mt-1 w-full" type="text" name="v_ref" :value="old('v_ref')" required />
                        </div>

                        <!-- Ref tribunal -->
                        <div class="mt-4">
                            <x-label for="ref_tribunal" :value="__('Ref tribunal')" />
                            <x-input id="ref_tribunal" class="block mt-1 w-full" type="text" name="ref_tribunal" :value="old('ref_tribunal')" required />
                        </div>

                        <!-- Date -->
                        <div class="mt-4">
                            <x-label for="date" :value="__('Date')" />
                            <x-input id="telephone2" class="block mt-1 w-full" type="date" name="date" :value="old('date')" />
                        </div>

                        <!-- Montant -->
                        <div class="mt-4">
                            <x-label for="montant" :value="__('Montant')" />
                            <x-input id="montant" class="block mt-1 w-full" type="text" name="montant" :value="old('montant')" />
                        </div>

                        <!-- Tribunal -->
                        <div class="mt-4">
                            <x-label for="tribunal" :value="__('Tribunal')" />
                            <x-textarea id="tribunal" class="block mt-1 w-full" name="tribunal" :value="old('tribunal')" rows="5" cols="33" />
                        </div>

                        <!-- Lieu -->
                        <div class="mt-4">
                            <x-label for="lieu" :value="__('Lieu')" />
                            <x-textarea id="lieu" class="block mt-1 w-full" name="lieu" :value="old('lieu')" rows="5" cols="33" />
                        </div>

                        <!-- Nom du juge -->
                        <div class="mt-4">
                            <x-label for="juge" :value="__('Nom du juge')" />
                            <x-textarea id="juge" class="block mt-1 w-full" name="juge" :value="old('juge')" rows="5" cols="33" />
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

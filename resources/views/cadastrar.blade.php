<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Cadastre seu carro") }}
                    <form action="/cadastrar" method="POST">
                    @csrf <!-- token de formulário -->
                    <!-- IdCarro -->
                    <div>
                        <x-input-label for="IdCarro" :value=" ('IdCarro')" />
                        <x-text-input id="IdCarro" class="block mt-1 w-full" type="text" name="IdCarro" :value="old('Nome')" maxlength="50" required autofocus autocomplete="IsCarro" />
                        <x-input-error :messages="$errors->get('IdCarro')" class="mt-2" />
                    </div>
                    <!-- SimboloQuimico -->
                    <div class="mt-4">
                        <x-input-label for="Marca" :value=" ('Marca')" />
                        <x-text-input id="Marca" class="block mt-1 w-full" type="text" name="Marca" :value="old('Marca')" maxlength="10" required autofocus autocomplete="Marca" />
                        <x-input-error :messages="$errors->get('SimboloQuimico')" class="mt-2" />
                    </div>
                    <!-- NumeroAtomico -->
                    <div class="mt-4">
                        <x-input-label for="Modelo" :value=" __('Modelo')" />
                        <x-text-input id="Modelo" class="block mt-1 w-full" type="text" name="Marca" :value="old('Marca')" required autocomplete="Mmarca" />
                        <x-input-error :messages="$errors->get('Marca')" class="mt-2" />
                    </div>
                    <!-- MassaAtomica -->
                    <div class="mt-4">
                        <x-input-label for="Ano" :value="__('Ano')" />
                        <x-text-input id="MassaAtomica" class="block mt-1 w-full" type="date" step="Ano" name="Ano" :value="old('MassaAtomica')" required autocomplete="Ano" />
                        <x-input-error :messages="$errors->get('Ano')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4"> {{ __('Cadastro') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

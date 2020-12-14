<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Novo Cliente
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tenants.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">* Razão Social</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="logo" class="block font-medium text-sm text-gray-700">Logo</label>
                            <input type="file" name="logo" id="logo" class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="fantasy" class="block font-medium text-sm text-gray-700">* Nome Fantasia</label>
                            <input type="text" name="fantasy" id="fantasy" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('fantasy', '') }}" />
                            @error('fantasy')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="cnpj" class="block font-medium text-sm text-gray-700">* CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('cnpj', '') }}" />
                            @error('cnpj')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="active" class="block font-medium text-sm text-gray-700">Ativo?</label>
                            <select id="active" name="active" autocomplete="active" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="Y" @if(isset($tenant) && $tenant->active == 'Y') selected @endif>SIM</option>
                                <option value="N" @if(isset($tenant) && $tenant->active == 'N') selected @endif>Não</option>
                            </select>
                        </div>

                        <h3>Assinatura</h3>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="subscription" class="block font-medium text-sm text-gray-700">Data Assinatura (início)</label>
                            <input type="date" name="subscription" id="cnpj" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('subscription', '') }}" />
                            @error('subscription')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="expires_at" class="block font-medium text-sm text-gray-700">Expira (final)</label>
                            <input type="date" name="expires_at" id="cnpj" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('expires_at', '') }}" />
                            @error('expires_at')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="subscription_id" class="block font-medium text-sm text-gray-700">Identificador</label>
                            <input type="text" name="subscription_id" id="subscription_id" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('subscription_id', '') }}" />
                            @error('subscription_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="subscription_active" class="block font-medium text-sm text-gray-700">* Assinatura Ativa?</label>
                            <select id="subscription_active" name="subscription_active" autocomplete="subscription_active" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="1" @if(isset($tenant) && $tenant->subscription_active) selected @endif >SIM</option>
                                <option value="0" @if(isset($tenant) && $tenant->subscription_active) selected @endif>Não</option>
                            </select>
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="subscription_suspended" class="block font-medium text-sm text-gray-700">* Assinatura Cancelada?</label>
                            <select id="subscription_suspended" name="subscription_suspended" autocomplete="subscription_suspended" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="1" @if(isset($tenant) && $tenant->subscription_suspended) selected @endif >SIM</option>
                                <option value="0" @if(isset($tenant) && $tenant->subscription_suspended) selected @endif>Não</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
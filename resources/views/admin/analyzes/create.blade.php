<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Nova Análises
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('analyzes.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="tenant_id" class="block font-medium text-sm text-gray-700">Cliente</label>
                                <select name="tenant_id" id="tenant_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                    <option value="">Selecione o cliente</option>
                                    @foreach($tenants as $tenant)
                                        <option value="{{ $tenant->id }}">{{ $tenant->name }}</option>
                                    @endforeach
                                </select>
                                @error('tenant_id')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Data de Coleta</label>
                            <input type="date" name="date_analyzes" id="date_analyzes" type="date_analyzes" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('date_analyzes', '') }}" />
                            @error('date_analyzes')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="laboratory_id" class="block font-medium text-sm text-gray-700">Laboratório</label>
                            <select name="laboratory_id" id="laboratory_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                <option value="">Selecione o laboratório</option>
                                @foreach($laboratories as $laboratory)
                                    <option value="{{ $laboratory->id }}">{{ $laboratory->name }}</option>
                                @endforeach
                            </select>
                            @error('laboratory_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="arquivo" class="block font-medium text-sm text-gray-700">* Arquivo</label>
                            <input type="file" name="arquivo" id="arquivo" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   />                                                      
                        </div>
                        
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center mr-2 px-4 py-2 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                <a href="{{ route('analyzes.index') }}">Cancelar</a>
                            </button>
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
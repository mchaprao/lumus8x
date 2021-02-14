<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Novo Item
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <?php
                    $data = implode('/', array_reverse(explode('-', $analyze->date_analyzes)));
                ?>
                <p class="pl-5">ID da análise: {{ $analyze->id }}</p>
                <p class="pl-5">Cliente: <b> {{ $analyze->tenant['name'] }} </b></p>
                <p class="pl-5">Laboratório: <b> {{ $analyze->laboratory['name'] }} </b></p>
                <p class="pl-5">Data da coleta: <b> {{ $data }} </b></p><br>

                <div class="row pl-5">
                    <h4>Parâmetros da coleta</h4>
                </div>
                <form method="post" action="{{ route('analyze-item.store', ['analyze' => $analyze]) }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tenant_id" class="block font-medium text-sm text-gray-700">Parâmetro de análise</label>
                            <select name="parameter_id" id="parameter_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                <option value="">Selecione o parâmetro</option>
                                @foreach($parametros as $parametro)
                                    <option value="{{ $parametro->id }}">{{ $parametro->name }}</option>
                                @endforeach
                            </select>
                            @error('parameter_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="result" class="block font-medium text-sm text-gray-700">Valor resultado</label>
                            <input type="text" name="result" id="result" type="result" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('result', '') }}" />
                            @error('result')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="location" class="block font-medium text-sm text-gray-700">Coletado na</label>
                            <select id="location" name="location" autocomplete="location" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="Entrada" @if(isset($parametro) && $parametro->location == 'Entrada') selected @endif >Entrada</option>
                                <option value="Saída" @if(isset($parametro) && $parametro->location == 'Saída') selected @endif>Saída</option>
                            </select>
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Análise
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('analyzes.update', $analyze->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tenant_id" class="block font-medium text-sm text-gray-700">Cliente</label>
                            <select name="tenant_id" id="tenant_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                @foreach($tenants as $tenant)
                                    <option value="{{ $tenant->id }}" {{ $tenant->id == $analyze->tenant_id ? 'selected' : ''}}>{{ $tenant->name }}</option>
                                @endforeach
                            </select>
                            @error('tenant_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date_analyzes" class="block font-medium text-sm text-gray-700">Data de Coleta</label>
                            <input type="date" name="date_analyzes" id="date_analyzes" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('date_analyzes', $analyze->date_analyzes) }}" />
                            @error('date_analyzes')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="laboratory_id" class="block font-medium text-sm text-gray-700">Laboratório</label>
                            <select name="laboratory_id" id="laboratory_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                @foreach($laboratories as $laboratory)
                                    {{-- <option value="{{ $laboratory->id }}">{{ $laboratory->name }}</option> --}}
                                    <option value="{{ $laboratory->id }}" {{ $laboratory->id == $analyze->laboratory_id ? 'selected' : ''}}>{{ $laboratory->name }}</option>
                                @endforeach
                            </select>
                            @error('laboratory_id')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>                        

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Situação</label>
                            <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 block w-full">                                
                                <option value="A" @if(isset($analyze) && $analyze->status == 'A') selected @endif >Aguardando coleta</option>
                                <option value="R" @if(isset($analyze) && $analyze->status == 'R') selected @endif >Coleta realizada</option>
                                <option value="C" @if(isset($analyze) && $analyze->status == 'C') selected @endif >Análise concluída</option>
                            </select>
                        </div>              

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center mr-2 px-4 py-2 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                <a href="{{ route('analyzes.index') }}">Cancelar</a>
                            </button>
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Editar
                            </button>
                        </div>
                        {{-- <div class="block mt-8">
                            <a href="{{ route('laboratories.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Lista de Usuários</a>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
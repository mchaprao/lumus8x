<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Análise
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-row flex-wrap flex-grow mt-2">
                    <div class="w-full md:w-1/2 p-3">
                        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form method="post" action="{{ route('analyzes.update', $analyze->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="tenant_id" class="block font-medium text-sm text-gray-700">Cliente</label>
                                            <select name="tenant_id" id="tenant_id"
                                                    class="form-select rounded-md shadow-sm mt-1 block w-full">
                                                @foreach($tenants as $tenant)
                                                    <option
                                                        value="{{ $tenant->id }}" {{ $tenant->id == $analyze->tenant_id ? 'selected' : ''}}>{{ $tenant->name }}</option>
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
                                                     <option value="{{ $laboratory->id }}">{{ $laboratory->name }}</option>
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
{{--                                         <div class="block mt-8">--}}
{{--                                            <a href="{{ route('laboratories.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Lista de Usuários</a>--}}
{{--                                        </div>--}}



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-3 pr-7">
                        <div class="bg-white border rounded shadow">
                            <div class="border-b p-3">
                                <h5 class="font-bold uppercase text-gray-600">Resultados Análitico</h5>
                            </div>
                            <div class="p-5">
{{--                            </div>--}}

                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 w-full">
                                    <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Parâmeto
                                        </th>

                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Coleta
                                        </th>

                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Valor
                                        </th>

                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ações
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($itens as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $item->parameter['name'] }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $item->location }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $item->result }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            Excluir | Editar
                                        </td>

                                        {{--                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">--}}
                                        {{--                                                @if($analyze->status == 'A')--}}
                                        {{--                                                    <span class="badge badge-success">Aguardando coleta</span>--}}
                                        {{--                                                @elseif($analyze->status == 'R')--}}
                                        {{--                                                    <span class="badge badge-danger">Coleta realizada</span>--}}
                                        {{--                                                @else--}}
                                        {{--                                                    <span class="badge badge-danger">Análise concluída</span>--}}
                                        {{--                                                @endif--}}
                                        {{--                                            </td>--}}

                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $analyze->arquivo }}
                                        </td> --}}

                                        {{--                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">--}}
                                        {{--                                               --}}
                                        {{--                                                <a href="{{ route('analyzes.show', $analyze->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Ver</a>--}}
                                        {{--                                                @can('Analise - Editar')--}}
                                        {{--                                                    <a href="{{ route('analyzes.edit', $analyze->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Editar</a>--}}
                                        {{--                                                @endcan--}}
                                        {{--                                                @can('Analise - Excluir')--}}
                                        {{--                                                    <form class="inline-block" action="{{ route('analyzes.destroy', $analyze->id) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir esse registro?');">--}}
                                        {{--                                                        <input type="hidden" name="_method" value="DELETE">--}}
                                        {{--                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                        {{--                                                        <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Excluir">--}}
                                        {{--                                                    </form>--}}
                                        {{--                                                @endcan--}}
                                        {{--                                               --}}
                                        {{--                                            </td>--}}
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div>--}}
    {{--        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">--}}
    {{--            <div class="mt-5 md:mt-0 md:col-span-2">--}}
    {{--                <form method="post" action="{{ route('analyzes.update', $analyze->id) }}">--}}
    {{--                    @csrf--}}
    {{--                    @method('put')--}}
    {{--                    <div class="shadow overflow-hidden sm:rounded-md">--}}

    {{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
    {{--                            <label for="tenant_id" class="block font-medium text-sm text-gray-700">Cliente</label>--}}
    {{--                            <select name="tenant_id" id="tenant_id" class="form-select rounded-md shadow-sm mt-1 block w-full">--}}
    {{--                                @foreach($tenants as $tenant)--}}
    {{--                                    <option value="{{ $tenant->id }}" {{ $tenant->id == $analyze->tenant_id ? 'selected' : ''}}>{{ $tenant->name }}</option>--}}
    {{--                                @endforeach--}}
    {{--                            </select>--}}
    {{--                            @error('tenant_id')--}}
    {{--                                <p class="text-sm text-red-600">{{ $message }}</p>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}

    {{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
    {{--                            <label for="date_analyzes" class="block font-medium text-sm text-gray-700">Data de Coleta</label>--}}
    {{--                            <input type="date" name="date_analyzes" id="date_analyzes" class="form-input rounded-md shadow-sm mt-1 block w-full"--}}
    {{--                                   value="{{ old('date_analyzes', $analyze->date_analyzes) }}" />--}}
    {{--                            @error('date_analyzes')--}}
    {{--                                <p class="text-sm text-red-600">{{ $message }}</p>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}

    {{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
    {{--                            <label for="laboratory_id" class="block font-medium text-sm text-gray-700">Laboratório</label>--}}
    {{--                            <select name="laboratory_id" id="laboratory_id" class="form-select rounded-md shadow-sm mt-1 block w-full">--}}
    {{--                                @foreach($laboratories as $laboratory)--}}
    {{--                                    --}}{{-- <option value="{{ $laboratory->id }}">{{ $laboratory->name }}</option> --}}
    {{--                                    <option value="{{ $laboratory->id }}" {{ $laboratory->id == $analyze->laboratory_id ? 'selected' : ''}}>{{ $laboratory->name }}</option>--}}
    {{--                                @endforeach--}}
    {{--                            </select>--}}
    {{--                            @error('laboratory_id')--}}
    {{--                                <p class="text-sm text-red-600">{{ $message }}</p>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}

    {{--                        <div class="px-4 py-5 bg-white sm:p-6">--}}
    {{--                            <label for="status" class="block font-medium text-sm text-gray-700">Situação</label>--}}
    {{--                            <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 block w-full">--}}
    {{--                                <option value="A" @if(isset($analyze) && $analyze->status == 'A') selected @endif >Aguardando coleta</option>--}}
    {{--                                <option value="R" @if(isset($analyze) && $analyze->status == 'R') selected @endif >Coleta realizada</option>--}}
    {{--                                <option value="C" @if(isset($analyze) && $analyze->status == 'C') selected @endif >Análise concluída</option>--}}
    {{--                            </select>--}}
    {{--                        </div>--}}

    {{--                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">--}}
    {{--                            <button class="inline-flex items-center mr-2 px-4 py-2 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">--}}
    {{--                                <a href="{{ route('analyzes.index') }}">Cancelar</a>--}}
    {{--                            </button>--}}
    {{--                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">--}}
    {{--                                Editar--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                        --}}{{-- <div class="block mt-8">--}}
    {{--                            <a href="{{ route('laboratories.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Lista de Usuários</a>--}}
    {{--                        </div> --}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>

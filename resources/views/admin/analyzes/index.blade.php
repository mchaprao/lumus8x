<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Análises Analíticas
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            @can('Efluentes - Analises - Adicionar')
                <div class="block mb-8">
                <a href="{{ route('analyzes.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Adicionar Nova Coleta</a>
            </div>
            @endcan

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Data de Coleta
                                    </th>

                                    @can('Tenant')
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cliente
                                    </th>
                                    @endcan

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Laboratório
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Situação
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ações
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($analyzes as $analyze)
                                    <?php
                                        $data = implode('/', array_reverse(explode('-', $analyze->date_analyzes)));
                                    ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $data }}
                                        </td>

                                        @can('Tenant')
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $analyze->tenant['name'] }}
                                        </td>
                                        @endcan

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $analyze->laboratory['name'] }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            @if($analyze->status == 'A')
                                                <span class="badge badge-success">Aguardando coleta</span>
                                            @elseif($analyze->status == 'R')
                                                <span class="badge badge-danger">Coleta realizada</span>
                                            @else
                                                <span class="badge badge-danger">Análise concluída</span>
                                            @endif
                                        </td>

                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $analyze->arquivo }}
                                        </td> --}}

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
{{--                                            @if($analyze->arquivo == '')--}}
{{--                                                Sem arquivo--}}
{{--                                            @endif--}}
                                                {{-- <a href="{{ route('analyzes.show', $analyze->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Arquivo</a> --}}

                                            <a href="{{ route('analyzes.show', $analyze->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Ver</a>
                                            @can('Efluentes - Analises - Editar')
                                                <a href="{{ route('analyzes.edit', $analyze->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Editar</a>
                                            @endcan
                                            @can('Efluentes - Analises - Excluir')
                                                <form class="inline-block" action="{{ route('analyzes.destroy', $analyze->id) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir esse registro?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Excluir">
                                                </form>
                                            @endcan
                                            @can('Efluentes - Analises - Parametro')
                                                <a href="{{ route('analyze-item.create', $analyze->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">+ Parâmetro</a>
                                            @endcan
                                            {{-- <a href="{{ route('analyzes.roles', $analyze->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Cargos</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="p-2 bg-gray-200">
                            {{ $analyzes->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

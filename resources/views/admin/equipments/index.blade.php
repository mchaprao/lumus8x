<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Equipamentos
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            @can('Adicionar Equipamento')
            <div class="block mb-8">
                <a href="{{ route('equipments.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Adicionar Novo Equipamento</a>
            </div>
            @endcan
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Serial
                                    </th>
                                    <th scope="col" width="250" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Equipamento
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Descrição (Marca/Modelo/Ano)
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Situação
                                    </th>
                                    @can('Acoes Equipamentos')
                                    <th scope="col" width="200" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ações
                                    </th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($equipments as $equipment)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $equipment->serial }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $equipment->name }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $equipment->description }}
                                        </td>

                                        @if($equipment->status == 'G')
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-front">
{{--                                            {{ ($equipment->status == 'G' ? 'Funcional' : 'Manutenção') }}--}}
                                                Funcionando
                                        </td>
                                        @elseif($equipment->status == 'M')
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-orange">
                                                Manutenção
                                            </td>
                                        @elseif($equipment->status == 'B')
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-danger">
                                                Quebrado
                                            </td>
                                        @endif

                                        @can('Acoes Equipamentos')
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('equipments.show', $equipment->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Ver</a>
                                            <a href="{{ route('equipments.edit', $equipment->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Editar</a>
                                            <form class="inline-block" action="{{ route('equipments.destroy', $equipment->id) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir o registro?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Excluir">
                                            </form>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="p-2 bg-gray-200">
                            {{ $equipments->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Relatórios
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            @can("Visita - Adicionar")
            <div class="block mb-8">
                <a href="{{ route('r_etes.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Adicionar Novo Relatório</a>
            </div>
            @endcan
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" width="100" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Data
                                    </th>
                                    @can('Clientes')
                                        <th scope="col" width="100" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Cliente
                                        </th>        
                                    @endcan                                    
                                    <th scope="col" width="150" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tipo de Documento
                                    </th>                                    
                                    <th scope="col" width="200" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ações
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($r_etes as $r_ete)
                                    <?php
                                        $data = implode('/', array_reverse(explode('-', $r_ete->date_at)));
                                    ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $data }}
                                        </td>
                                        @can('Clientes')
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $r_ete->tenant['name'] }}
                                            </td>
                                        @endcan                                        

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $r_ete->reportType['name'] }}
                                        </td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                                            @if($r_ete->arquivo == '')
                                                Aguardando arquivo
                                            @elseif($r_ete->arquivo !== '')
                                                <a href="{{ asset('backend/assets/images/reportEte/'.$r_ete->arquivo) }}" target="_blank" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Baixar Arquivo</a>
                                            @endif
                                            
                                            @can("Relatório - Editar")
                                            <a href="{{ route('r_etes.edit', $r_ete->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Editar</a>
                                            @endcan
                                            @can("Relatório - Excluir")
                                            <form class="inline-block" action="{{ route('r_etes.destroy', $r_ete->id) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir o registro?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Excluir">
                                            </form>
                                            @endcan
                                            {{-- <a href="" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Perfil</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>                        
                        <div class="p-2 bg-gray-200">
                            {{ $r_etes->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

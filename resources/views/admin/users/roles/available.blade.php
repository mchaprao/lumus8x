<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cargos disponíveis para o Usuário <strong>{{ $user->name }}</strong>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #
                                    </th>
                                    <th scope="col" width="250" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nome
                                    </th>  
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">                                
                                    <form action="{{ route('users.roles.attach', $user->id) }}" method="POST">
                                        @csrf

                                        @foreach ($roles as $role)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $role->name }}
                                                </td>                                            
                                            </tr>                                            
                                        @endforeach
                                        <tr>
                                            <td colspan="500">
                                                @include('admin.includes.alerts')
                                                
                                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Vincular ao Usuário</button>
                                            </td>                                            
                                        </tr>  
                                    </form>
                                </tbody>
                            </table>
                        </div>                        
                        <div class="p-2 bg-gray-200">
                            {{ $roles->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

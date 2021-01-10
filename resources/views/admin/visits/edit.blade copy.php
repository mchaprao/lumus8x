<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Visita
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('visits.update', $visit->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="visit_at" class="block font-medium text-sm text-gray-700">* Data da Visita</label>
                            <input type="date" name="visit_at" id="visit_at" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('visit_at', $visit->visit_at) }}" />
                            @error('visit_at')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tenant_id" class="block font-medium text-sm text-gray-700">* Cliente</label>
                            <select id="tenant_id" name="tenant_id" autocomplete="tenant_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($tenants as $tenant)
                                    <option
                                        value="{{ $tenant->id }}" {{ ($tenant->id === $visit->tenant_id ? 'selected' : '') }}>
                                        {{ $tenant->name }}
                                    </option>
                                @endforeach     
                            </select>                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_id" class="block font-medium text-sm text-gray-700">* Técnico</label>
                            <select id="user_id" name="user_id" autocomplete="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($users as $user)
                                    <option
                                        value="{{ $user->id }}" {{ ($user->id === $visit->user_id ? 'selected' : '') }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach     
                            </select>                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Situação</label>
                            <select id="status" name="status" autocomplete="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">                                
                                <option value="P"
                                    {{ (old('status') == 'P' ? 'selected' : ($visit->status == 'P' ? 'selected' : '')) }}>
                                    Pendente
                                </option>
                                <option value="C"
                                    {{ (old('status') == 'C' ? 'selected' : ($visit->status == 'C' ? 'selected' : '')) }}>
                                    Concluída
                                </option>
                                <option value="A"
                                    {{ (old('status') == 'A' ? 'selected' : ($visit->status == 'A' ? 'selected' : '')) }}>
                                    Andamento
                                </option>
                            </select>                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="imagem" class="block font-medium text-sm text-gray-700">* Arquivo</label>
                            <input type="file" name="imagem" id="imagem" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                  onChange="carregarImg();" />                                                      
                        </div>                        


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center mr-2 px-4 py-2 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                <a href="{{ route('visits.index') }}">Cancelar</a>
                            </button>
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Editar
                            </button>
                        </div>
                    </div>
                </form>

                <!--SCRIPT PARA CARREGAR IMAGEM PRINCIPAL -->
                <script type="text/javascript">
                    function carregarImg() {

                        var target = document.getElementById('target');
                        var file = document.querySelector("input[type=file]").files[0];
                        var reader = new FileReader();

                        reader.onloadend = function () {
                        target.src = reader.result;
                        };

                        if (file) {
                        reader.readAsDataURL(file);


                        } else {
                        target.src = "";
                        }
                    }
                </script>

            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar Novo Produto
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">* Título</label>
                            <input type="text" name="title" id="title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('title', '') }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="price" class="block font-medium text-sm text-gray-700">* Preço</label>
                            <input type="text" name="price" id="price" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('price', '') }}" />
                            @error('price')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror                            
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="image" class="block font-medium text-sm text-gray-700">* Imagem</label>
                            <input type="file" name="image" id="image" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   />                                                      
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">* Descrição</label>                            
                                <textarea id="description" name="description" rows="4" class="form-textarea rounded-md shadow-sm mt-1 block w-full" placeholder=""></textarea>
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center mr-2 px-4 py-2 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                <a href="{{ route('products.index') }}">Cancelar</a>
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
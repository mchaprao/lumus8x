<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Posts
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Título</label>
                            <input type="text" name="title" id="title" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('title', $post->title) }}"/>
                            @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="category_id" class="block font-medium text-sm text-gray-700">Categoria</label>
                            <select id="category_id" name="category_id" autocomplete="category_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    <option
                                        value="{{ $category->id }}" {{ ($category->id === $post->category_id ? 'selected' : '') }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="image" class="block font-medium text-sm text-gray-700">Imagem</label>
                            <input type="file" name="image" id="image"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                            />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="content" class="block font-medium text-sm text-gray-700">Conteúdo</label>
                            <textarea id="content" name="content" rows="4"
                                      class=" bodyfield form-textarea rounded-md shadow-sm mt-1 block w-full"
                                      placeholder="">{{ $post->content }}</textarea>
                            @error('content')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="published_at" class="block font-medium text-sm text-gray-700">Data de
                                Publicação</label>
                            <input type="date" name="published_at" id="published_at" type="text"
                                   class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('published_at', $post->published_at) }}"/>
                            @error('published_at')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Editar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea.bodyfield',
            height: 300,
            menubar: false,
            plugins: ['link', 'table', 'image', 'autoresize', 'lists'],
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft alignright alignjustify | table | link image | bullist numlist',
            content_css:[
                '{{ asset('frontend/assets/css/chaprao.css') }}'
            ],
            images_upload_url:'{{ route('imageupload') }}',
            image_upload_credentials:true,
            convert_urls:false
        });
    </script>

</x-app-layout>

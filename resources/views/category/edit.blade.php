<x-app-layout>
    @if ($post !== null)
        @if (Auth::user())
            @if (Auth::user()->id == $post->user_id)
                <x-slot name="header">
                    <div class="flex items-center justify-center">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __("Editar post") }}
                        </h2>
                    </div>
                </x-slot>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                <form action="/category/edit/{{$post->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-5">
                                        <label for="title" class="text-white">Título:</label>
                                        <input type="text" id="title" name="title" class="mt-1 p-1 w-full bg-white dark:bg-gray-900 text-white border rounded" value="{{$post->title}}" required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="poster" class="text-white">Poster:</label>
                                        <input type="file" id="poster" name="poster" accept="image/*" class="mt-1 p-1 w-full bg-white dark:bg-gray-900 text-white border rounded" onchange="previewImage(event)" />
                                        <input type="hidden" name="current_poster" value="{{ $post->poster }}">
                                    </div>
                                    <div class="mb-5">
                                        <label for="content" class="text-white">Contenido:</label>
                                        <textarea id="content" name="content" class="mt-1 p-1 w-full h-24 bg-white dark:bg-gray-900 text-white border rounded" required>{{$post->content}}</textarea>
                                    </div>
                                    <div class="mb-5">
                                        <label for="category_id" class="text-white">Categoría:</label>
                                        <select id="category_id" name="category_id" class="mt-1 p-1 w-full bg-white dark:bg-gray-900 text-white border rounded" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <button type="submit" class="inline-block bg-gray-300 hover:bg-gray-100 text-black px-4 py-2 rounded">Hecho</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            var output = document.getElementById('image-preview');
                            output.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
            @else
                <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
                    <h2>No puedes editar un post que no es tuyo</h2>
                </div>
            @endif
        @else
            <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
                <h2>Debes registrarte para poder editar un post</h2>
            </div>
        @endif
    @else
        <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
            <h2>No existe un post con esa id</h2>
        </div>
    @endif
</x-app-layout>

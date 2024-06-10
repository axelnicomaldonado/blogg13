<x-app-layout>
    @if (Auth::user())
        <x-slot name="header">
            <div class="flex items-center justify-center relative">
                <div>
                    <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __("Crear post") }}
                    </h2>
                </div>
            </div>
        </x-slot>
    <div>
        <h1>Crear nuevo post</h1>
        <form action="/category/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="mb-5">
                <label for="poster">Poster:</label>
                <input type="file" id="poster" name="poster" accept="image/*">
            </div>
            <div class="mb-5">
                <label for="content">Contenido:</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <div class="mb-5">
                <label for="category_id">Categoría:</label>
                <select id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2">Guardar</button>
        </form>
    </div>
    @else
        <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
            <h2>Debes registrarte para poder crear un post</h2>
        </div>
    @endif
</x-app-layout>

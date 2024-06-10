<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-center relative">
            <div>
                <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __("Crear nuevo artículo") }}
                </h2>
            </div>
        </div>
    </x-slot>
    @if (Auth::user())
    <div class="mt-10 py-8 max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
    overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
        <form action="/category/create" method="POST">
            @csrf
            <div class="mb-5">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="mb-5">
                <label for="poster">Poster:</label>
                <input type="text" id="poster" name="poster" required>
            </div>
            <div class="mb-5">
                <label for="content">Contenido:</label>
                <textarea id="content" name="content" required></textarea>
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

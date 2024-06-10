<x-app-layout>
    @if ($post ==! null)
    @if (Auth::user())
    @if (Auth::user()->id == $post->user_id)
        <x-slot name="header">
            <div class="flex items-center justify-center relative">
                <div>
                    <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __("Editar post") }}
                    </h2>
                </div>
            </div>
        </x-slot>
        <div className="Formulario">
            <form action="/category/edit/{{$post->id}}" method="POST">

                @csrf
                @method('PUT')
                <div class="mt-10 py-8 max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
                overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                    <div className="divTitle" class="mb-5">
                        <label for="title">Titulo</label>
                        <input className="title" name="title" type="text" value="{{$post->title}}"/>
                    </div>
                    <div className="divPoster" class="mb-5">
                        <label for="poster">Poster</label>
                        <input className="poster" name="poster" type="text" value="{{$post->poster}}"/>
                    </div>
                    <div className="divContent" class="mb-5">
                        <label for="content">Contenido</label>
                        <input class="h-20 w-80" name="content" type="text" value="{{$post->content}}"/>
                    </div>
                    <div className="divSubmit" class="inline-block bg-blue-500 text-white px-4 py-2">
                        <input type="submit" value="Hecho">
                    </div>
                </div>
            <form>
        </div>
    @else
        <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
            <h2>No podes editar un post que no es tuyo</h2>
        </div>
    @endif
    @else
        <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
            <h2>Debes registrarte para poder editar un post</h2>
        </div>
    @endif
    @else
        <div class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">
            <h2>no existe un post con esa id</h2>
        </div>
    @endif
</x-app-layout>
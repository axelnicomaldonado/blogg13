<x-app-layout>
    @if($posts ==! null)
    <x-slot name="header">
        <div class="flex items-center justify-center relative">
            <div>
                <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __($category->title) }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div className="posts">
        @if(count($posts) ==! 0)
        @foreach ($posts as $post)
            <div class="mt-10 py-8 max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
            overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <div class="text-3xl font-bold">
                    <h3>{{$post->title}}</h3>
                </div>
                @foreach($users as $user)
                    @if($user->id == $post->user_id)
                        <div class="text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">
                            <p>{{$user->username}}</p>
                        </div>
                    @endif
                @endforeach
                <div className="botones">
                    <a href="/category/show/{{$post->id}}" class="font-bold inline-flex text-blue-400 
                        px-4 py-2">
                        <p>Ver post</p>
                    </a>
                    @if(Auth::check() && Auth::user()->id == $post->user_id)
                        <a href="/category/edit/{{$post->id}}"
                        class="inline-flex text-blue-400 px-4 py-2">
                            <p>Editar post</p>
                        </a>
                    @endif
                </div>
                <div class="text-gray-500">
                    <p>{{$post->created_at}}</p>
                </div>
            </div>
        @endforeach
        @else
            <h2 class="mt-10 text-5xl text-gray-800 dark:text-gray-200 text-center">No hay posts que mostrar</h2>
        @endif
    </div>

    @else
        <div classname="divElse">
            <h2>No existe una categoria con el id proporcionado</h2>
        </div>
    @endif
</x-app-layout>
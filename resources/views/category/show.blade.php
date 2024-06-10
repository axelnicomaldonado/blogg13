<!DOCTYPE html>
<x-app-layout>
<!--estilado del titulo: bg-gradient-to-r from-red-800 to-indigo-900 from-70% -->

    <body>
        <div class="container mx-auto p-2 mt-6 text-white">
            <div class="rounded-lg p-6 mx-80" style="background-image: url('{{ asset('storage/imagenes/posts/' . $post->poster) }}'); background-size: cover; background-position: center;">
                <div class="rounded-md bg-black/[0.5] pl-4 pt-2 pb-px mr-28">
                    <h1 class="text-4xl font-semibold mb-8 text-left mr-40 tracking-wide">{{ $post->title }}</h1>
                </div>
            </div>
            <div class="mx-96">
                <p class="mt-6">Publicado el {{ $post->created_at->format('d/m/Y') }} a las {{ $post->created_at->format('h:i A') }}.</p>
                <p class="mb-2">Autor: <a class="underline" href="/profile/{{$post->user->username}}">{{$post->user->username}}</a></p>
                <div class="mt-20 prose-xl"><p> {!!($post->content) !!} </p></div>
            </div>
        </div>
    </body>
</x-app-layout>
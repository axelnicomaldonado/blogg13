<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
    </head>

    <body>
        <header>
            <h1>Blogg13</h1>
        </header>
        <div className="Formulario">
            <h3>Editar Post</h3>
            <form action="/category/edit/{{$post->id}}" method="POST">

                @csrf
                @method('PUT')

                <div className="divTitle">
                    <label for="title">Titulo</label>
                    <input className="title" name="title" type="text" value="{{$post->title}}"/>
                </div>
                <div className="divPoster">
                    <label for="poster">Poster</label>
                    <input className="poster" name="poster" type="text" value="{{$post->poster}}"/>
                </div>
                <div className="divContent">
                    <label for="content">Contenido</label>
                    <input className="content" name="content" type="text" value="{{$post->content}}"/>
                </div>
                <div className="divSubmit">
                    <input type="submit" value="Hecho">
                </div>
            <form>
        </div>
    </body>
</html>
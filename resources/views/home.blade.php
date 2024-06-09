<x-app-layout>
        <header>
            <h1>Blogg13</h1>
        </header>
        <div className="panelIzquierda">
            <a href="/category">
                <h3>Categorias</h3>
            </a>
            <a href="/category/create">
                <h3>Crear post</h3>
            </a>
        </div>
        <div className="posts">
            @foreach ($posts as $post)
                <div className="post">
                    <div className="titulo">
                        <h3>{{$post->title}}</h3>
                    </div>
                    <div className="categoria">
                        <p>Categoria</p>
                    </div>
                    <div className="botones">
                        <a href="/category/show/{{$post->id}}"><p>Ver post</p></a>
                        @if(Auth::user()->id == $post->user_id)
                            <a href="/category/edit/{{$post->id}}"><p>Editar post</p></a>
                        @endif
                    </div>
                    <div className="fecha">
                        <p>{{$post->created_at}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div className="footer">
            <h4>Footer</h4>
        </div>
    </x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
    </head>

    <body>
        <header>
            <h1>Blogg13</h1>
        </header>
        <div className="panelIzquierda">
            <a>
                <h3>Categorias</h3>
            </a>
            <a>
                <h3>Crear post</h3>
            </a>
        </div>
        <div className="posts">
            <script>//meterlo en un .map por cada post que exista</script>
            <div className="post">
                <div className="titulo">
                    <h3>Titulo</h3>
                </div>
                <div className="Categoria">
                    <p>Categoria</p>
                </div>
                <div className="botones">
                    <button>Ver post</button>
                    <button>Editar post</button>
                </div>
                <div className="fecha">
                    <p>Fecha y hora</p>
                </div>
            </div>
        </div>
        <div className="footer">
            <h4>Footer</h4>
        </div>
    </body>
</html>
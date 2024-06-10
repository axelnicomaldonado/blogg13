<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Artículo</title>
</head>
<body>
    <div>
        <h1>Crear Nuevo Artículo</h1>
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
</body>
</html>

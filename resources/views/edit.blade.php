<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejemplo Laravel con Bootstrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ab8069f9ea.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="container mt-5">
            <h1 class="text-center">Editar Producto</h1>
            <form method="POST" action="{{ route('crud.update', $product->id_producto) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $product->nombre }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio del producto</label>
                    <input type="text" class="form-control" name="precio" value="{{ $product->precio }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cantidad del producto</label>
                    <input type="number" class="form-control" name="cantidad" value="{{ $product->cantidad }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>    
    </body>
</html>
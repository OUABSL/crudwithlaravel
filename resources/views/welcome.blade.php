<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ab8069f9ea.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <h1 class="text-center p-3">Productos</h1>
    <div class="p5 m-4">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProducto">
            Añadir Producto
          </button>

          @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          
          <div class="modal fade" id="modalProducto" tabindex="-1" aria-labelledby="modalLabelProducto" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabelProducto">Nuevo Producto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('crud.store')}}">
                      @csrf
                      <div class="form-group">
                          <label>Nombre del producto</label>
                          <input type="text" class="form-control" name="nombre" required>
                      </div>
                      <div class="form-group">
                          <label>Precio</label>
                          <input type="number" step="0.01" class="form-control" name="precio" required>
                      </div>
                      <div class="form-group">
                          <label>Cantidad</label>
                          <input type="number" class="form-control" name="cantidad" required>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar producto</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    <table class="table table-responsive table-bordered table-hover mx-0">
        <thead class="bg-primary text-white">
            <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">precio</th>
            <th scope="col">cantidad</th>
            <th><th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
            <tr>
                <th scope="row">{{$item->id_producto}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->cantidad}}</td>
                <td>
                    <a href="{{ route('crud.edit', $item->id_producto) }}" class="btn bg-info"><i class="fas fa-pen"></i></a>
                    <a href="{{route('crud.delete_producto', $item->id_producto)}}" class="btn bg-danger"><i class="fa fa-trash"></i></a>  
                <td>    
            </tr>   
            @endforeach

        </tbody>
    </table>



    <h1 class="text-center p-3">Usuarios</h1>
    <table class="table table-responsive table-bordered table-hover mx-0">
        <thead class="bg-primary text-white">
            <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre de Usuario</th>
            <th scope="col">Clave</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos_usuarios as $item)
            <tr>
                <th scope="row">{{$item->id_usuario}}</th>
                <td>{{$item->usuario}}</td>
                <td>{{$item->clave}}</td>
            </tr>   
            @endforeach

        </tbody>
    </table>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
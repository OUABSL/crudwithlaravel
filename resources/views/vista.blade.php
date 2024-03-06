<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MI APP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Primera vista</h1>
    <div class="p5 m-4">
    <table class="table table-responsive mx-0">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">precio</th>
      <th scope="col">cantidad</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datos as $item)
    <tr>
      <th scope="row">{{$item.id_producto}}</th>
      <td>{$item.id_producto}</td>
      <td>{$item.id_producto}</td>
      <td>@{$item.id_producto}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
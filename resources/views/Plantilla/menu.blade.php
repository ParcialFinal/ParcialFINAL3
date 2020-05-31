
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{route('inicio.index')}}">ParcialFinal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('categoria.index')}}">Categorías</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('producto.index')}}">Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('proveedor.index')}}">Proveedores</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('proveedor_producto.index')}}">Proveedor_Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('compra.index')}}">Compras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href= "{{route('detalle_compra.index')}}">Detalle de la Compra</a>
      </li>
    </ul>
  </div>
  <div>@yield('men')</div>
  
</nav>
</body>
</html>


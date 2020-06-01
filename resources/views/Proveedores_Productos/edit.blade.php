<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
@include('Plantilla.menu')
<div class="row" style='margin:10px 40px 40px 40px'>
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('proveedor_producto.update',['id'=>$proveedores_productos->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading" style='padding-top:20px'>
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Proveedor | Producto</b></h3>
            </div>
            <div class="panel-body">
            <div class="form-group">
                      <label class="col-md-2 control-label" for="exampleFormControlSelect1">Proveedor</label>
                      <div class="col-md-9">
                      
                        <select class="form-control" id="proveedor_id" name="proveedor_id">
                        @foreach($proveedores as $proveedor)
                        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                          
                        @endforeach  
                        </select>
                      
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label" for="exampleFormControlSelect1">Producto</label>
                      <div class="col-md-9">
                      
                        <select class="form-control" id="producto_id" name="producto_id">
                        @foreach($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                          
                        @endforeach  
                        </select>
                      
                      </div>
                    </div>
              @if(count($errors)>0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('proveedor.index')}}" class="btn btn-danger">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
          </div>
        </form>
      </div>
</div>
</body>
</html>
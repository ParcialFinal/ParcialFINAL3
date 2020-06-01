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
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('detalle_compra.update',['id'=>$detalles_compras->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading" style='padding-top:20px'>
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Detalle | Compra</b></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                      <label class="col-md-2 control-label" for="exampleFormControlSelect1">Fecha</label>
                      <div class="col-md-9">
                      
                        <select class="form-control" id="compra_id" name="compra_id">
                        @foreach($compras as $compra)
                        <option value="{{$compra->id}}">{{$compra->fecha}}</option>
                        @endforeach  
                        </select>
                      
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label" for="exampleFormControlSelect1">Proveedores_Productos</label>
                      <div class="col-md-9">
                      
                        <select class="form-control" id="proveedor_producto_id" name="proveedor_producto_id">
                        @foreach($proveedores_productos as $proveedor_producto)
                        <option value="{{$proveedor_producto->id}}">{{$proveedor_producto->id}}</option>
                        @endforeach  
                        </select>   
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Cantidad:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="number" require id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad" value="{{old('cantidad')}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Valor Unitario:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="valor_unitario" name="valor_unitario" class="form-control" placeholder="Valor Unitario" value="{{old('valor_unitario')}}"/>
                            </div>
                        </div>
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
              <a href="{{route('detalle_compra.index')}}" class="btn btn-danger">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
          </div>
        </form>
      </div>
</div>
</body>
</html>
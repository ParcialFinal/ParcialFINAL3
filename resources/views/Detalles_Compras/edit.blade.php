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
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('proveedor.update',['id'=>$proveedor->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="panel-heading" style='padding-top:20px'>
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Proveedores</b></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Nombres y Apellidos completos:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre del Proveedor" value="{{old('nombre')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Direccion del Proveedor:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="direccion" name="direccion" class="form-control" placeholder="Direccion del Proveedor" value="{{old('direccion')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Contacto:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="contacto" name="contacto" class="form-control" placeholder="Contacto del Proveedor" value="{{old('contacto')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Telefono:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="telefono" name="telefono" class="form-control" placeholder="Telefono del Proveedor" value="{{old('telefono')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Página Web:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="pagina_web" name="pagina_web" class="form-control" placeholder="Página Web del Proveedor" value="{{old('pagina_web')}}"/>
                            </div>
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
              <a href="{{route('proveedor.index')}}" class="btn btn-danger">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
            </div>
          </div>
        </form>
      </div>
</div>
</body>
</html>
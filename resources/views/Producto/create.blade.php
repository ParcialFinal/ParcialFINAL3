<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Crear</title>
</head>
<body>
@include('Plantilla.menu')
<div class="row" style='margin:10px 40px 40px 40px'>
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('producto.store')}}" method="POST">
          @csrf
          <div class="panel panel-warning">
            <div class="panel-heading" style='padding-top:20px'>
              <h3 class="panel-title"><span class="fa  fa-cutlery" ></span><b> Nuevo Producto</b></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Nombre:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="nombre" name="nombre" class="form-control" placeholder="Nombre del Producto" value="{{old('nombre')}}"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Descripcion:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="descripcion" name="descripcion" class="form-control" placeholder="Descripcion" value="{{old('descripcion')}}"/>
                            </div>
                        </div>
                    </div>

                      <!--
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Categoria:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="number" require id="categoria_id" name="categoria_id" class="form-control" placeholder="Categoria" value="{{old('categoria_id')}}"/>
                            </div>
                        </div>
                    </div>
                    -->
                    
                    <div class="form-group">
                      <label class="col-md-2 control-label" for="exampleFormControlSelect1">Categoria</label>
                      <div class="col-md-9">
                      
                        <select class="form-control" id="categoria_id" name="categoria_id">
                        @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                          
                        @endforeach  
                        </select>
                      
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
              <button type="submit" class="btn btn-info pull-right">Registrar</button>
            </div>
          </div>
        </form>
      </div>
</div>
</body>
</html>
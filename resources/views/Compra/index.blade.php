<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Compras</title>
</head>
<body>
@include('Plantilla.menu')

<div class="row" style='margin:10px 40px 40px 40px'>
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title" style='padding-top:20px'>Informe de Compras </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('compra.create')}}" class="btn btn-success"><i class="fa fa-bars " ></i>Agregar Compra</a>
                </div>                                                       
            </div>
            <div class="panel-body panel-body-table" style='margin-top:20px'>                                
                <!-- START RESPONSIVE TABLES -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                        <table class="table datatable table-bordered table-striped table-actions">
                                            <thead> 
                                                <tr>
                                                    <th width="90" class="text-center">Id</th>
                                                    <th class="text-center">Fecha</th>
                                                    <th class="text-center">Descripción</th>
                                                    <th class="text-center">Proveedor</th>
                                                    <th width="200" class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                @foreach($compras as $compra)
                                                
                                              <tr>
                                                <td class="text-center">{{$compra->id}}</td>
                                                <td class="text-center">{{$compra->fecha}}</td>
                                                <td class="text-center">{{$compra->descripcion}}</td>
                                                <td class="text-center">{{$compra->proveedor->nombre}}</td>
                                                <td>
                                                  <a href="{{route('compra.editar',['id'=>$compra->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('compra.delete',['id'=>$compra->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
                                                </td>
                                              </tr>
                                            
                                            @endforeach
                                            </tbody>
                                        </table>                               
                                </div>
                            </div>                                                
                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->                                        
            </div>
        </div>
    </div>
</div>
</div>            
</body>
</html>
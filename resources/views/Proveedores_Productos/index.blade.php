<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Proveedores|Productos</title>
</head>
<body>
@include('Plantilla.menu')

<div class="row" style='margin:10px 40px 40px 40px'>
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title" style='padding-top:20px'>Informe de Proveedores_Productos</h2>
                <div class="btn-group pull-right">
                    <a href="{{route('proveedor_producto.create')}}" class="btn btn-success"><i class="fa fa-bars " ></i>Agregar Proveedores_Productos</a>
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
                                                    <th class="text-center">Proveedor</th>
                                                    <th class="text-center">Producto</th>
                                                    <th width="200" class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                @foreach($proveedores_productos as $proveedor_producto)
                                                    <tr>
                                                        <td class="text-center">{{$proveedor_producto->id}}</td>
                                                        <td class="text-center">{{$proveedor_producto->proveedores->nombre}}</td>
                                                        <td class="text-center">{{$proveedor_producto->productos->nombre}}</td>
                                                        <td>
                                                        <a href="{{route('proveedor_producto.editar',['id'=>$proveedor_producto->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                        <a href="{{route('proveedor_producto.delete',['id'=>$proveedor_producto->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
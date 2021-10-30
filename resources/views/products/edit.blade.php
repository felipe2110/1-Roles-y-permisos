<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Crear producto</title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('products.update',$products->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{$products->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input class="form-control" id="description" name="description" rows="3" value="{{$products->description}}"></input>
                            </div>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" name="price" value="{{$products->price}}">
                            </div>
                            <div class="form-group">
                                <label for="">Imagen</label>
                                <input class="form-control" type="file" id="formFile" name="fileImage" value="{{$products->image}}">
                                <img src="{{ asset('uploads/products/'.$products->image)}}" width="120px" alt="...">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary">Guardar</button>
                                <a href="{{url('products')}}" class="btn btn-dark">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>

        </html>
    </x-slot>
</x-app-layout>

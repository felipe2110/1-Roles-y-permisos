<x-app-layout>
    <x-slot name="header">
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Producto: {{$products->name}}</title>
        </head>

        <body>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <a href="{{url('products')}}" class="btn btn-warning">Ir al inicio</a>
                        <div class="table-responsive">
                            <table class="table table-striped mt-3">
                                <tr>
                                    <th>NOMBRE</th>
                                    <td>{{$products->name}}</td>
                                </tr>
                                <tr>
                                    <th>DESCRIPCIÓN</th>
                                    <td>{{$products->description}}</td>
                                </tr>
                                <tr>
                                    <th>PRECIO</th>
                                    <td>{{$products->price}}</td>
                                </tr>
                                <tr>
                                    <th>IMAGEN</th>
                                    <td>
                                        <img src="{{ asset('uploads/products/'.$products->image)}}" width="120px" alt="...">
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>
    </x-slot>


</x-app-layout>

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles">Agregar Productos</h1>
        </div>
    </div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('producto.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="referencia">Referencia del Producto</label>
                                <input type="text" class="form-control" name="referencia" id="referencia" aria-describedby="referencia" placeholder="referencia">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre del Producto</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre" placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="observaciones">Observaciones</label>
                                <textarea name="observaciones"  class="form-control"  style="resize: none"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label for="precio">Precio </label>
                            <input type="text" class="form-control" name="precio" id="precio" aria-describedby="precio" placeholder="Precio">
                        </div>
                        <div class="col-md-4"><label for="inpuesto">Inpuesto </label>
                            <input type="text" class="form-control" name="inpuesto" id="inpuesto" aria-describedby="inpuesto" placeholder="Inpuesto">
                        </div>
                        <div class="col-md-4"><label for="cantidad">Cantidad </label>
                            <input type="text" class="form-control" name="cantidad" id="cantidad" aria-describedby="cantidad" placeholder="Cantidad">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-file">
                                <input type="file" name="imagen" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Foto del Producto</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-raised  btn-block"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection
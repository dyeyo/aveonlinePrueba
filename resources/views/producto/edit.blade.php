@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <h3 class="text-titles">Editar Producto {{$product->id}}</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('producto.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="referencia">Referencia del Producto</label>
                                <input type="text" class="form-control" value="{{$product->referencia}}" name="referencia" id="referencia" aria-describedby="referencia" placeholder="referencia">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre del Producto</label>
                                <input type="text" class="form-control" value="{{$product->nombre}}" name="nombre" id="nombre" aria-describedby="nombre" placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="observaciones">Observaciones</label>
                                <textarea name="observaciones"  class="form-control"  style="resize: none">{{$product->observaciones}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><label for="precio">Precio </label>
                            <input type="text" class="form-control" value="{{$product->precio}}" name="precio" id="precio" aria-describedby="precio" placeholder="Precio">
                        </div>
                        <div class="col-md-4"><label for="inpuesto">Inpuesto </label>
                            <input type="text" class="form-control" value="{{$product->inpuesto}}" name="inpuesto" id="inpuesto" aria-describedby="inpuesto" placeholder="Inpuesto">
                        </div>
                        <div class="col-md-4"><label for="cantidad">Cantidad </label>
                            <input type="text" class="form-control" value="{{$product->cantidad}}" name="cantidad" id="cantidad" aria-describedby="cantidad" placeholder="Cantidad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Estado</h5>
                            <label for="visible">Visible </label>
                            <input type="radio"  value="1"  {{ $product->estado== '1' ? 'checked' : '' }} name="estado" id="visible">
                            <label for="novisible">No Visible </label>
                            <input type="radio"  value="2"  {{ $product->estado== '2' ? 'checked' : '' }} name="estado" id="novisible">
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" name="imagen" value="{{$product->imagen}}" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Foto del Producto</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-raised  btn-block"><i class="zmdi zmdi-floppy"></i>
                        Actualizar
                    </button>
                </form>

                <form method="POST" id="borrar"
                      action="{{route('producto.destroy',$product->id)}}">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button  type="submit"  onclick="return confirm('¿Esta seguro de eliminar este registro?')" class="btn bg-danger ">
                        Eliminar
                    </button>
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
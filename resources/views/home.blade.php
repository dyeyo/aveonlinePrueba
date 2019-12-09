@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full-box">
                    @foreach($product as $item)
                        <a href="{{route('producto.edit',$item->id)}}">
                            <article class="full-box tile">
                                <div class="full-box tile-title text-center text-titles text-uppercase">
                                    {{$item->nombre}}
                                </div>
                                <div class="full-box tile-icon text-center">
                                    <img style="margin-left: 3px;width: 93%;height: 133px;" src="{{asset('images/'.$item->imagen)}}">
                                </div>
                                <div class="full-box tile-number text-titles">
                                    <p class="full-box">{{$item->precio}}</p>
                                    <small>{{$item->cantidad}} Unidades</small>
                                </div>
                            </article>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

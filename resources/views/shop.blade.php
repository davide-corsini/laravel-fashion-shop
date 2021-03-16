@extends('layouts.app')


@section('content')
    <div   class="container shop-cont d-flex flex-wrap">
        @foreach ($dresses as $item)

            <div class="box d-flex-c justify-content-center">
                <img class="poster" src="{{$item['poster']}}" alt="">
                <h3>{{$item->brand}}</h3>
                <p>{{$item->name}} - {{$item->type}}</p>
                <p class="price">{{$item->price}}€</p>

            </div>

    
        
            
        @endforeach

    </div>
@endsection
@extends('layouts.app')

@section('content')
    <h1 style="text-align: center;">WELCOME TO THE SHOP</h1>

    <div style="max-width: 980px; border: 1px solid black;"class="container d-flex flex-wrap">
        @foreach ($dresses as $item)

            <div style="width: calc(100%/3); border: 1px solid rgba(211, 211, 211, 0.5); height: 200px;" class="box">
                <img style="width: 80%; height: 80%;" src="{{$item['poster']}}" alt="">
                <p>{{$item->name}}</p>
                <p>{{$item->brand}}</p>
                <p>{{$item->type}}</p>
                <p>{{$item->price}}€</p>

            </div>

    
        
            
        @endforeach

    </div>

    
@endsection
@extends('layouts.app')

@section('content')
    <h1 style="text-align: center;">WELCOME TO THE SHOP</h1>

    <div style="max-width: 980px; border: 1px solid black;"class="container d-flex flex-wrap">
        @foreach ($dresses as $item)

            <div class="box">
                <p>{{$item['name']}}</p>
                <p>{{$item['brand']}}</p>
                <p>{{$item['type']}}</p>
                <p>{{$item['price']}}€</p>

            </div>
    
        
            
        @endforeach

    </div>

    
@endsection
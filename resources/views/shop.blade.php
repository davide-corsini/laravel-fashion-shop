@extends('layouts.app')


@section('content')
    <div style="max-width: 980px; border: 1px solid black;"class="container d-flex flex-wrap">
        @foreach ($dresses as $item)

            <div style="height: 500px; width: calc(100%/3); border: 1px solid rgba(211, 211, 211, 0.5); height: 200px;" class="box">
                <div class="box-poster" >
                    <img style="width: 100%; height: 100%;" src="{{$item['poster']}}" alt="">
                </div>
                <p>{{$item->name}}</p>
                <p>{{$item->brand}}</p>
                <p>{{$item->type}}</p>
                <p>{{$item->price}}€</p>

            </div>

    
        
            
        @endforeach

    </div>
@endsection
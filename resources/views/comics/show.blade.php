@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex">
                <img src=" {{$comic->thumb}}
                " alt="">
                <div class="description-comic m-5">
                    <h1 class="ps-2 pb-4">{{$comic->title}}</h1>
                    <p class="mb-1">genere:</p>
                    <p class="mb-1">prezzo: {{$comic->price}}</p>
                    <p class="mb-1">serie: {{$comic->series}}</p>
                    <p class="mb-1">data d'uscita: {{$comic->sale_date}}</p>
                </div>
                
            </div>
            <p class="mx-3 my-2">{{$comic->description}}</p>
            <p>autori: {{$comic->writers}}</p>
        </div>
    </div>
@endsection
        
        
 
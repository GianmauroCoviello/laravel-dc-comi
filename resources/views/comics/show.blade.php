@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex">
                <img src=" {{$comic->thumb}}
                " alt="">
                <div class="description-comic m-5">
                    <h1 class="ps-2 pb-4">{{$comic->title}}</h1>
                    <p class="mb-1"><strong> genere</strong>:{{$comic->type}}</p>
                    <p class="mb-1"><strong> prezzo</strong>: {{$comic->price}}</p>
                    <p class="mb-1"><strong> serie</strong>: {{$comic->series}}</p>
                    <p class="mb-1"><strong>data d'uscita</strong>: {{$comic->sale_date}}</p>
                </div>
                
            </div>
            <p class="mx-3 my-2"><strong> descrizione</strong>:  {{$comic->description}}</p>
            <p class="mt-4"><strong> autori</strong>: {{$comic->writers}}</p>
        </div>
    </div>
@endsection
        
        
 
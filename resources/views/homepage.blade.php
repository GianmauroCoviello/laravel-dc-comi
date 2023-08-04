@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>DC COMICS</h1>
                <button class="btn btn-primary">
                    <a href="{{route('comics.index')}}"> Visualizza tutti i fumetti</a> 
                </button>
        
            </div>
        </div>
    </div>
@endsection
        
        
 
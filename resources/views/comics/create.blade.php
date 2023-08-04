@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="mb-5 text-center">Aggiungi un nuovo fumetto</h1>
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h3>Titolo</h3>
                        <input type="text" id="title" name="title" placeholder="inserisci titolo">
                    </div>
                    <div class="form-group">
                        <h3>Serie</h3>
                        <input type="text" id="title" name="title" placeholder="inserisci serie">
                    </div>
                    <div class="form-group">
                        <h3>Prezzo</h3>
                        <input type="text" id="title" name="title" placeholder="inserisci prezzo">
                    </div>
                    <button type="submit" class="btn btn-primary">salva</button>


                </form>
            </div>
                
        </div>
    </div>
@endsection
        
        
 
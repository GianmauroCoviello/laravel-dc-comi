@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <table>
                    <thead>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Serie</th>
                        <th>Prezzo</th>
                        <th>Azioni</th>
                        
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td>{{$comic->id}}</td>
                                <td>{{$comic->title}}</td>
                                <td>{{$comic->series}}</td>
                                <td>{{$comic->price}}</td>
                                <td>
                                    <button class="btn btn-primary">
                                         <a href="{{route('comics.show', $comic->id)}}">seleziona</a>
                                    </button>
                                    <button class="btn btn-primary mt-4">
                                        <a href="{{route('comics.edit' , $comic->id)}}">modifica</a>
                                    </button>
                                </td>
                                
                              
                            </tr>


                            
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary mt-4">
                    <a href="{{route('comics.create')}}">aggiungi un altro fumetto</a>
                </button>
                
            </div>
        </div>
    </div>
@endsection
        
        
 
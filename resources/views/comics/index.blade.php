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
                        @foreach ($comics as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->series}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <button class="btn btn-primary">
                                         <a href="{{route('comics.show', $item->id)}}">seleziona</a>
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
        
        
 
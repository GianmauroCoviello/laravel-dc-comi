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
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
        
        
 
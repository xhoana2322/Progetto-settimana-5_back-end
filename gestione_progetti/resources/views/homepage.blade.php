
@extends('templates.layout')

@section('title', 'Tabella Progetti')

@section('content')
    <table class="table align-middle mt-4">
    <thead class="table-light align-middle text-center">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Users_ID</th>
        <th scope="col">Attivita_ID</th>
        <th scope="col">Creato in data</th>
        <th scope="col">Modificato in data</th>
        <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @if($progetti)
            @foreach($progetti as $key => $value)
                <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{ $value->titolo }}</td>
                    <td>{{ $value->descrizione }}</td>
                    <td class="text-center">{{ $value->users_id }}</td>
                    <td class="text-center">{{ $value->attivitas_id }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->updated_at }}</td>
                    <td>
                        <a type="button" class="btn btn-outline-info w-100" href="/progetto/{{$value->id}}">Info</a>
                        <a type="button" class="btn btn-outline-warning my-2 w-100" href="/progetto/{{$value->id}}">Modifica</a>
                        <a type="button" class="btn btn-outline-danger w-100" href="/progetto/{{$value->id}}">Elimina</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    </table>
@endsection
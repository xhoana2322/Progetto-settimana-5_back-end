
<x-app-layout>
    @extends('templates.layout')
    @section('title', 'Tabella Progetti')
    @section('content')

    <div class="hero-modal">
        <button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#addProjectModal">
            Aggiungi Progetto
        </button>
        <!-- modale aggiungere progetto  -->
        <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addProjectModalLabel">Aggiungi Progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="/progetto/progetto" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="mb-3">
                                <label for="descrizione" class="form-label">Descrizione</label>
                                <textarea class="form-control" id="descrizione" name="descrizione"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table align-middle mt-4">
        <thead class="table-light align-middle text-center">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Users_ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Creato in data</th>
            <th scope="col">Modificato in data</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody class="table-group-divider text-center">
            @if($progetti)
                @foreach($progetti as $key => $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td  class="text-center">{{ $value->users_id }}</td>
                        <td>{{ $value->titolo }}</td>
                        <td>{{$value->descrizione}}</td>
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
</x-app-layout>




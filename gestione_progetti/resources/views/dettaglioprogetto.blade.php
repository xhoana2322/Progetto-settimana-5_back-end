<x-app-layout> 
    @extends('templates.layout')
    @section('title', 'Info Project') 
    @section('content')
        <div>
            <div class="card-body mx-auto w-75 border border-secondary rounded bg-light text-center p-5">
                <h4 class="card-title ">{{$progetti->titolo}}</h4>
                <p class="card-text"><small class="text-body-secondary">Last updated {{$progetti->updated_at}}</small></p>
                <p>Attivit&agrave;: 
                    <a href="attivita/{{$progetti->attivitas_id}}"><button type="button" class="btn btn-light p-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{$progetti->attivitas_nome}}
                    </button></a>
                </p>
                <p class="card-text">{{$progetti->descrizione}}</p>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-outline-dark d-block w-25 mx-auto mt-3" href="/dashboard">Back</a>
            </div>
        </div>
    @endsection
</x-app-layout>


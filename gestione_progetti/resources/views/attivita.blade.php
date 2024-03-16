<x-app-layout> 
    @extends('templates.layout')
    @section('title', 'Info Project') 
    @section('content')
        <div>
            <div class="card-body mx-auto w-75 border border-secondary rounded bg-light text-center p-5">
                <h4 class="card-title ">{{$attivita->nome}}</h4>
                <p class="card-text"><small class="text-body-secondary">Last updated {{$attivita->updated_at}}</small></p>
                <p class="card-text">{{$attivita->descrizione}}</p>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-outline-dark d-block w-25 mx-auto mt-3" href="/dashboard">Back</a>
            </div>
        </div>
    @endsection
</x-app-layout>
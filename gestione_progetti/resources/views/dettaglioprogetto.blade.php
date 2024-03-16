<x-app-layout> 
    @extends('templates.layout')
    @section('title', 'Info Project')

    @section('content')
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$progetti->titolo}}</h5>
                    <p class="card-text">{{$progetti->descrizione}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{$progetti->updated_at}}</small></p>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-outline-dark d-block" href="/posts">Back</a>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
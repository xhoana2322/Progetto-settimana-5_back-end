<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Progetto;
use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;

class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = DB::table('progettos')->get();
        return view('dashboard', ['progetti' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
        $progetto = new Progetto();
        $progetto->nome = $request->nome;
        $progetto->descrizione = $request->descrizione;
        $progetto->users_id = Auth::id();
        $progetto->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $progetto)
    {
        return view('dettaglioprogetto', ['progetti' => $progetto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        $progetto = new Progetto();
        $progetto->nome = $request->nome;
        $progetto->descrizione = $request->descrizione;
        $progetto->users_id = Auth::id();
        $queryBuilder = Progetto::create($progetto);
        // $progetto->save();

        return redirect()->action([ProgettoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        //
    }
}

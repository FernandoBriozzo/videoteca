<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Genero;
use App\models\Pelicula;

class GeneroController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $generos = Genero::all();
        return view('generos.index')->with(['generos' => $generos]);
    }

    public function show($id) {
        $genero = Genero::find($id);
        $peliculas = Pelicula::where('genero_id', $id)->get();
        return view('generos.show')->with(['genero' => $genero, 'peliculas' => $peliculas]);
    }

    public function create() {
        return view('generos.create');
    }

    public function store(Request $request) {
        Genero::create([
            'nombre' => $request->nombre
        ]);
        return redirect('generos');
    }

    public function edit($id) {
        $genero = Genero::find($id);
        return view('generos.edit')->with(['genero' => $genero]);
    }

    public function update(Request $request, $id) {
        $genero = Genero::find($id);
        $genero->nombre = $request->nombre;
        $genero->save();
        return redirect('generos');
    }

    public function destroy($id) {
        Genero::destroy($id);
        return redirect('generos');
    }
}

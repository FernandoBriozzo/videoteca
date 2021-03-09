<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pelicula;
use App\models\Genero;
use App\models\Director;

class PeliculaController extends Controller
{
    public function __construct()
{
    // Middleware only applied to these methods
    $this->middleware('auth', ['only' => [
        'edit', 'update', 'create' // Could add bunch of more methods too
    ]]);
}

    public function index() {
        $peliculas = Pelicula::all();
        $peliculas = Pelicula::join('generos', 'genero_id', '=', 'generos.id')->join('directors', 'director_id', '=', 'directors.id')->select('peliculas.*', 'generos.nombre as genero', 'directors.nombre as director')->get();
        return view('peliculas.index')->with(['peliculas' => $peliculas]);
    }

    public function create() {
        $generos = Genero::all();
        $directores = Director::all();
        return view('peliculas.create')->with([
            'generos' => $generos,
            'directores' => $directores
        ]);
    }

    public function store(Request $request) {
        Pelicula::create([
            'nombre' => $request->nombre,
            'anio' => $request->anio,
            'imagen' => $request->imagen,
            'genero_id' => $request->genero,
            'director_id' => $request->director,
            'sinopsis' => $request->sinopsis
        ]);
        return redirect('peliculas')->with('success','Item created successfully!');
    }

    public function show ($id) {
        $pelicula = Pelicula::join('generos', 'genero_id', '=', 'generos.id')->join('directors', 'director_id', '=', 'directors.id')->select('peliculas.*', 'generos.nombre as genero', 'directors.nombre as director')->where('peliculas.id', $id)->first();
        return view('peliculas.show')->with(['pelicula' => $pelicula]);
    }

    public function edit($id) {
        $pelicula = Pelicula::find($id);
        $generos = Genero::all();
        $directores = Director::all();
        return view('peliculas.edit')->with([
            'pelicula' => $pelicula, 
            'generos' => $generos, 
            'directores' => $directores]);
    }

    public function update(Request $request, $id) {
        $pelicula = Pelicula::find($id);
        $pelicula->nombre = $request->nombre;
        $pelicula->anio = $request->anio;
        $pelicula->director_id = $request->director;
        $pelicula->genero_id = $request->genero;
        $pelicula->save();
        return redirect('peliculas')->with('success','Item created successfully!');

    }

    public function destroy($id) {
        Pelicula::destroy($id);
        return redirect('peliculas');
    }
}

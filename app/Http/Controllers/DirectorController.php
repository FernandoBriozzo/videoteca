<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Director;
use App\models\Pelicula;

class DirectorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $directores = Director::all();
        return view('directores.index')->with(['directores' => $directores]);
    }

    public function show($id) {
        $peliculas = Pelicula::where('director_id', $id)->get();
        $director = Director::find($id);
        return view('directores.show')->with(['peliculas' => $peliculas, 'director' => $director]);
    }

    public function create() {
        return view('directores.create');
    }

    public function store(Request $request){
        Director::create([
            'nombre' => $request->nombre
        ]);
        return redirect('directores')->with('success','Item created successfully!');
    }

    public function edit($id) {
        $director = Director::find($id);
        return view('directores.edit')->with(['director' => $director]);
    }

    public function update(Request $request, $id) {
        $director = Director::find($id);
        $director->nombre = $request->nombre;
        $director->save();
        return redirect('directores');

    }

    public function destroy($id) {
        Director::destroy($id);
        return redirect('directores');
    }
}

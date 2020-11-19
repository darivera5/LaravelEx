<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        
        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){

        return View('cursos.create');
    }

    public function store(Request $request){

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso){
        
        return View('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso->id); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    
    public function index()
    {
        $dados = Especialidade::all();
        $clinica = "VetClin DWII";

        return view('especialidades.index', compact('dados'));
    }

    public function create()
    {
        return view('especialidade.create');
    }

    
    public function store(Request $request)
    {
        Especialidade::create([
            'nome' =>$request->nome,
            'descricao' => $request->descricao,
        ]);
    }

    
    public function show($id){}

    
    public function edit($id)
    {
        $dados = Especialidade::find($id);

        if(!isset($dados)){return "<h1>ID: $id não encontrado!</h1>";}

        return view('especialidades.edit', compact('dados'));
    }

   
    public function update(Request $request, $id)
    {
        $obj = Especialidade::find($id);

        $obj->fill([

            'nome'=>$request->nome,
            'descricao'=>$request->descricao,

        ]);

        $obj->save();

        return redirect()->route('especialidade.index'); 
    }

    
    public function destroy($id)
    {
        $obj = Especialidade::find($id);

        $obj->fill([

            'nome'=>$request->nome,
            'descricao'=>$request->descricao,

        ]);

        $obj->destroy($id);

        return redirect()->route('especialidade.index');
        
    }
}

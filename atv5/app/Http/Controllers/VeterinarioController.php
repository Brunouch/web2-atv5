<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{



    public function index()
    {
        $dados = Veterinario::all();
        $clinica = "VetClin DWII";

        return view('veterinarios.index', compact('dados'));
    }


    public function create()
    {
        return view('veterinarios.create');
    }


    public function store(Request $request)
    {
        Veterinario::create([
            'crmv' => $request->crmv,
            'nome' => mb_strtoupper($request->nome, 'UTF8'),
            'especialidade_id' => $request->especialidade_id,
        ]);

        return redirect()->route('veterinarios.index');
    }


    public function show($crmv)
    { }


    public function edit($id)
    {

        $dados = Veterinario::find($id);

        if (!isset($dados)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        return view('veterinarios.edit', compact('dados'));
    }


    public function update(Request $request, $id)
    {
        $obj = Veterinario::find($id);

        if (!isset($obj)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        $obj->fill([
            'crmv' => $request->nome,
            'nome' => mb_strtoupper($request->nome, 'UTF8'),
            'especialidade' => $request->especialidade,
        ]);

        $obj->save();

        return redirect()->route('veterinarios.index');
    }


    public function destroy($id)
    {
        $obj = Veterinario::find($id);

        if (!isset($obj)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        $obj->destroy();

        return redirect()->route('veterinarios.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTarefaRequest;
use App\Http\Requests\UpdateTarefaRequest;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $contador;

    public function __construct()
    {
        if (!session()->has('contador')) {
            session(['contador' => 0]);
        }
    }


    public function index()
    {
        $tarefas = Tarefa::orderBy('ordem', 'asc')->get();

        return view('index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTarefaRequest $request)
    {
        $data = $request->all();

        $contador = session('contador');

        $contador += 1;

        session(['contador' => $contador]);

        $tarefa = new Tarefa();
        $tarefa->nome = $request->input('nome');
        $tarefa->custo = $request->input('custo');
        $tarefa->data = $request->input('data');
        $tarefa->ordem = $contador;

        $tarefa->save();

        return redirect()->route('site.index')->with('success', 'Tarefa cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTarefaRequest $request, $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $dados = $request->all();

        $tarefa->update($dados);

        return redirect()->route('site.index')->with('success', 'Tarefa atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect()->route('site.index');
    }

}

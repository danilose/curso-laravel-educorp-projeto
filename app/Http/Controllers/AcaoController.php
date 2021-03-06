<?php

namespace App\Http\Controllers;

use App\Acao;
use Illuminate\Http\Request;

class AcaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $acoes = Acao::all();
        return view('acoes.index', compact('acoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('acoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $acao = new Acao();
        $acao->nome = $request['nome'];
        $acao->qtdAlunos = $request['qtdAlunos'];
        $acao->save();
        
        return redirect('acoes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acao  $acao
     * @return \Illuminate\Http\Response
     */
    public function show(Acao $acao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acao  $acao
     * @return \Illuminate\Http\Response
     */
    public function edit(Acao $acao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acao  $acao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acao $acao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acao  $acao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acao $acao)
    {
        //
    }
}

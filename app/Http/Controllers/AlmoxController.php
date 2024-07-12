<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almox; // Certifique-se de importar o modelo correto

class AlmoxController extends Controller
{
    public function index()
    {
        $almoxData  = Almox::all(); // Obtém todos os registros da tabela almox
        return view('listaralmox', ['almoxData' => $almoxData]);
    }

    public function edit($id)
    {
        $almox = Almox::findOrFail($id);
        return view('editaralmox', compact('almox'));
    }

    public function update(Request $request, $id)
    {
        $almox = Almox::findOrFail($id);
        
        $almox->descricao = $request->input('descricao');
        $almox->estoque = $request->input('estoque');
        $almox->data_solicitacao_passada = $request->input('data_solicitacao_passada');
        $almox->data_solicitacao_atual = $request->input('data_solicitacao_atual');
        $almox->quantidade_solicitada = $request->input('quantidade_solicitada');
        $almox->quantidade_recebida = $request->input('quantidade_recebida');
        $almox->diferenca_recebido_solicitado = $request->input('quantidade_solicitada') - $request->input('quantidade_recebida');

        $almox->save();

        return redirect()->route('listar.almoxarifado')->with('success', 'Registro atualizado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MostrarUsuariosController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('listarusuarios', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('usuarioseditar', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('listar.usuarios')
            ->with('success', 'Usuário atualizado com sucesso!');
    }
}

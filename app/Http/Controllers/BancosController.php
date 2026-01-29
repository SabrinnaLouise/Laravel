<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;

class BancosController extends Controller 
{
    public function index() 
    {
       $bancos = Banco::all();
       return view('banco.index', ['bancos' => $bancos]);
    } 

    public function create()
    {
        return view('banco.create');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required', 
            'email'=> 'required',
            'telefone' => 'required',
            'tipo_conta' => 'required',
        ]);

        Banco::create([
            'nome'       => $request->nome,
            'cpf'        => $request->cpf,
            'email'=> $request->email,
            'telefone'   => $request->telefone,
            'tipo_conta' => $request->tipo_conta,
        ]);

        return redirect()->route('banco.index');
    }

public function edit($id)
{
    $banco = Banco::where('id', $id)->first();
    if(!empty($banco)) 
        {
            return view('banco.edit',['banco'=> $banco]);
        }
    else
        {
            return redirect()->route('banco.index');
        }
    }

public function update(Request $request , $id)
{
    
   $data = [   
    'nome'=> $request->nome,
    'cpf'=> $request->cpf,
    'email'=> $request->email,
    'telefone'=> $request->telefone,
    'tipo_conta'=> $request->tipo_conta,
    ];
    Banco::where('id', $id)->update($data);
    return redirect()->route('banco.index');
   
}

public function destroy($id)
{
   Banco::where('id', $id)->delete();
    return redirect()->route('banco.index');
}

}
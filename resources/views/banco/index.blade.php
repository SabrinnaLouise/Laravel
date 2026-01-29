@extends('layouts.app')

@section('title','Listagem')

<style>
    table {
        width: 100%;                
        border-collapse: collapse; 
        font-family: Arial, sans-serif;
        margin-top: 20px;
    }
</style>

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1 style="text-align: center; font-family: arial; font-size: 20px; color: #043d09; margin-top: 10px;">Listagem de usuários</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('banco.create') }}" class="btn btn-success"> Novo aqui ?</a>
        </div>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">email</th>
                <th scope="col">Tipo de Conta</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bancos as $banco)
            <tr>
                <th scope="row">{{ $banco->id }}</th>
                <td>{{ $banco->nome }}</td>
                <td>{{ $banco->cpf }}</td>
                <td>{{ $banco->telefone }}</td>
                <td>{{ $banco->email }}</td>
                <td>{{ $banco->tipo_conta }}</td>
                <td class="d-flex">
                    <a href="{{ route ('banco.edit',['id'=> $banco->id]) }}" 
                       class="btn btn-primary me-2"
                       onclick="return confirm('Você tem certeza que deseja editar o usuário {{ $banco->nome }}?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                        </svg>
                    </a>

                    <form action="{{ route('banco.destroy',['id'=> $banco->id]) }}" 
                          method="POST"
                          onsubmit="return confirm('CUIDADO: Tem certeza que deseja EXCLUIR permanentemente este registro?')">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.app')

@section('title','Listagem')

@section('content')
    <div class="container">
      <h1>Crie sua conta</h1>
      <style>
        h1 {
            margin-top: 25px;
            margin-bottom: 20px;
            text-align: center;
            color: #096d00;
            font-family:display header;
            font-size: 50px;

        }
        input {
            margin-bottom: 40px;
            width: 90%;
            padding: 10px;
            border: 1px solid #3cbb57;
            border-radius: 5px;
        }
        
        form {
            max-width: 490px;
            margin: 0 auto;
            padding: 30px;
            border: 4px solid #0c7022;
            border-radius: 30px;
            background-color: #025506;
            font-family: display header;
            color: #ffffff;
        }

        button:hover {
            background-color: #096d00;
        }
        .container-selecao {
            margin-bottom: 40px;
        }
        select {
            width: 95%;
            padding: 10px;
            border: 1px solid #3cbb57;
            border-radius: 5px;
        }

      </style>
        <hr>
    <form action="{{ route('banco.store') }}" method="POST">
    @csrf
       
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
        </div>

        <div class="form-group">
            <label for="cpf">Cadastro de Pessoa Física:</label>
            <input type="text" class="form-control" name="cpf" maxlength="11" placeholder="000.000.000-00">
        </div>   

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="abcd@gmail.com">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="number" class="form-control" name="telefone" placeholder="ddd 9 0000-0000">      
        </div>

        <div class="container-selecao">
            <label for="tipo_conta">Escolha:</label>
            <select id="tipo_conta" name="tipo_conta" required>
                <option value="" disabled selected>Selecione uma opção...</option>
                    
                <option value="corrente">corrente</option>
                <option value="poupanca">poupança</option>
                <option value="salario">salário</option>
                <option value="investimento">Investimento</option>
                <option value="empresarial">Empresarial</option>
                <option value="universitaria">Universitária</option>
                <option value="pagamento">Pagamento</option>
            </select>
        </div>
                <br>
        <div class="form-group">
                <button type="submit" class="btn btn-success">Criar Conta</button>
        </div>
    </form>
@endsection()
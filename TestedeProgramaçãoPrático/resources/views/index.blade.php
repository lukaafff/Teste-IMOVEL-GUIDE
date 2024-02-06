@extends('templates.template')

@section('content')
    <section class="container">
        <h1>Cadastro de Corretores</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert alert-danger" role="alert">
                @foreach($errors->all() as $erro)
                    {{ $erro }}<br>
                @endforeach
            </div>
        @endif

        <form name="formCadastro" id="formCadastro" method="post" action="{{ url('corretores') }}">
            @csrf
            <div class="form-container">
                <div class="input-group">
                    <input type="number" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                    <input type="number" id="creci" name="creci" placeholder="Digite seu Creci" required>
                </div>
                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required>
                <button type="submit" value="Cadastrar" class="mt-4">Cadastrar</button>
            </div>
        </form>

        @if ($corretor->isEmpty())
            <p>Nenhum corretor cadastrado no momento.</p>
        @else
            <div class="container-tabela">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CPF</th>
                            <th>CRECI</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($corretor as $corretores)
                            <tr>
                                <td>{{ $corretores->id }}</td>
                                <td>{{ $corretores->nome }}</td>
                                <td>{{ $corretores->cpf }}</td>
                                <td>{{ $corretores->creci }}</td>
                                <td>
                                    <a href="{{ url("corretores/$corretores->id/edit") }}">
                                        <button class="btn btn-warning">Editar</button>
                                    </a>

                                    <form action="{{ route('corretores.destroy', $corretores->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class= "btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection

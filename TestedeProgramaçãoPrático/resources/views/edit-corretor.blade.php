@extends('templates.template')

@section('content')
    <section class="container">
        <h1>Editar Corretor</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="post" action="{{ route('corretores.update', $corretor->id) }}">
            @csrf
            @method('PUT')
            <div class="form-container">
                <div class="input-group">
                    <input type="number" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{ $corretor->cpf }}" required>
                    <input type="number" id="creci" name="creci" placeholder="Digite seu Creci" value="{{ $corretor->creci }}" required>
                </div>
                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" value="{{ $corretor->nome }}" required>
                <button type="submit" class="mt-4">Salvar Alterações</button>
            </div>
        </form>
    </section>
@endsection

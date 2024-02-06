@extends('templates.template')

@section('content')
    <section class="container">
        <h1>Cadastro de Corretor</h1>

        <div class="form-container">
            <div class="input-group">
                <input type="number" placeholder="Digite seu CPF">
                <input type="number" placeholder="Digite seu Creci">
            </div>
            <input type="text" placeholder="Digite seu Nome">
            <button>Enviar</button>
        </div>

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
                    <tr>
                        <td>1</td>
                        <td>Luiza</td>
                        <td>12345678912</td>
                        <td>12345678</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-excluir">Excluir</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Luiza</td>
                        <td>12345678912</td>
                        <td>12345678</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-excluir">Excluir</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Luiza</td>
                        <td>12345678912</td>
                        <td>12345678</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-excluir">Excluir</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Luiza</td>
                        <td>12345678912</td>
                        <td>12345678</td>
                        <td>
                            <button class="btn-editar">Editar</button>
                            <button class="btn-excluir">Excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

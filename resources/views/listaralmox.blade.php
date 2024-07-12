@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Almoxarifado</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>DESCRIÇÃO</th>
                    <th>ESTOQUE</th>
                    <th>DT SOL PASSADA</th>
                    <th>DT SOL ATUAL</th>
                    <th>QTDE SOLICITADA</th>
                    <th>QTDE RECEBIDA</th>
                    <th>DIFERENÇA</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($almoxData as $almox)
                <tr>
                    <td>{{ $almox->sku }}</td>
                    <td>{{ $almox->descricao }}</td>
                    <td>{{ $almox->estoque }}</td>
                    <td>{{ $almox->data_solicitacao_passada }}</td>
                    <td>{{ $almox->data_solicitacao_atual }}</td>
                    <td>{{ $almox->quantidade_solicitada }}</td>
                    <td>{{ $almox->quantidade_recebida }}</td>
                    <td>{{ $almox->diferenca_recebido_solicitado }}</td>
                    <td>
                        <a href="{{ route('almox.edit', $almox->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

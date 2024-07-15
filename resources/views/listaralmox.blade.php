@extends('layouts.app')

@section('content')
    <div>
        @include('partials.headeralmox')
    </div>
    <div class="container table-container">
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>DESCRIÇÃO</th>
                    <th>ESTOQUE</th>
                    <th>DT SOL PASSADA</th>
                    <th>DT SOL ATUAL</th>
                    <th>SOLICITADO</th>
                    <th>RECEBIDO</th>
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
                    <td class="action-buttons">
                        <!-- Ação de editar fora da tabela -->
                        <a href="{{ route('almox.edit', $almox->id) }}" class="edit-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


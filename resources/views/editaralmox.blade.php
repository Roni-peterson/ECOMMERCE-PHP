@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.headeralmox')
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('almox.update', $almox->id) }}" method="POST" onsubmit="confirmSubmit(event)">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" name="sku" class="form-control" value="{{ $almox->sku }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" class="form-control" value="{{ $almox->descricao }}">
                    </div>
                    <div class="form-group">
                        <label for="estoque">Estoque</label>
                        <input type="number" name="estoque" class="form-control" value="{{ $almox->estoque }}">
                    </div>
                    <div class="form-group">
                        <label for="data_solicitacao_passada">Data Solicitação Passada</label>
                        <input type="date" name="data_solicitacao_passada" class="form-control" value="{{ $almox->data_solicitacao_passada }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data_solicitacao_atual">Data Solicitação Atual</label>
                        <input type="date" name="data_solicitacao_atual" class="form-control" value="{{ $almox->data_solicitacao_atual }}">
                    </div>
                    <div class="form-group">
                        <label for="quantidade_solicitada">Quantidade Solicitada</label>
                        <input type="number" name="quantidade_solicitada" class="form-control" value="{{ $almox->quantidade_solicitada }}">
                    </div>
                    <div class="form-group">
                        <label for="quantidade_recebida">Quantidade Recebida</label>
                        <input type="number" name="quantidade_recebida" class="form-control" value="{{ $almox->quantidade_recebida }}">
                    </div>
                    <div class="form-group">
                        <label for="diferenca_recebido_solicitado">Diferença Recebido/Solicitado</label>
                        <input type="number" name="diferenca_recebido_solicitado" class="form-control" value="{{ $almox->quantidade_solicitada - $almox->quantidade_recebida }}" readonly>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection

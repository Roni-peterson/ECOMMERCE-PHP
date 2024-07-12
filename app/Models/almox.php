<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almox extends Model
{
    public $timestamps = false; // Desativar timestamps automáticos, se necessário

    protected $table = 'almox'; // Especificar o nome da tabela

    protected $fillable = [
        'estoque',
        'data_solicitacao_atual',
        'data_solicitacao_passada',
        'quantidade_solicitada',
        'quantidade_recebida',
        'diferenca_recebido_solicitado',
        'sku',
        'descricao'
    ];
}

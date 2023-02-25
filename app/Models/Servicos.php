<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'equipamento_id',
        'orcamento_id',
        'funcionario_id',
        'desc_problema',
        'desc_resolucao',
        'desc_observacao',
        'data_entrada',
        'data_prazo',
        'data_final',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }

    public function orcamento()
    {
        return $this->belongsTo(Orcamento::class);
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $primaryKey = 'cnpj';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'razao_social',
        'telefone',
        'email',
        'cnpj',
        'endereco',
        'id_responsavel'
    ];

    public function responsavel()
    {
        return $this->belongsTo(Funcionario::class, 'id_responsavel');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'marca', 'dono_id', 'descricao'];

    public function dono()
    {
        return $this->belongsTo(Cliente::class, 'dono_id');
    }

    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}

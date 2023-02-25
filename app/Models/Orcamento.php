<?php

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamento';
    protected $fillable = ['id_servico', 'id_produto'];
    
    public function servico()
    {
        return $this->belongsTo(Servico::class, 'id_servico');
    }
    
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = ['nome','preco','descricao', 'img_source'];

    public function estoque(){
        return $this->hasMany(Estoque::class, 'produto_id', 'id');;
    }
}

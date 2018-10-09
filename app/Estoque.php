<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'produto';
    protected $fillable = ['produto_id','quantidade'];

  public function genero(){
    return $this->hasOne(Produto::class,'id','produto_id');
  }
}

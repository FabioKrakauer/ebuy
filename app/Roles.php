<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles";
    protected $fillable = ['id', 'user_id', 'role_name'];

    public function roles(){
        return $this->belongsToMany(Roles::class);
    }
}

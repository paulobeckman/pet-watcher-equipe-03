<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedigree extends Model
{
    protected $table = 'pedigrees';
    protected $fillable = [
        'code',
        'origin',
        'id_animal'
    ];
    public function pedigree()
    {
        return $this->hasMany(Animals::class,'id_animal', 'id');
    }
}

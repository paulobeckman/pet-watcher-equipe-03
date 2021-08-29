<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    // protected $table = 'species';
    protected $fillable = [
        'name', 
        'id_especies'
    ];
    public function species()
    {
        return $this->belongsTo(owners::class,'id_especies', 'id');
    }
}

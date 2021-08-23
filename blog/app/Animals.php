<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $table = 'animals';
    protected $fillable = [
        'name',
        'type_acquisition',
        'code_microchip',
        'size',
        'sex',
        'active',
        'reason_inactivation',
        'date_birth',
        'data_registration',
        'id_owner',
        'id_specie',
        'id_accredited_responsible'
    ];

    public function owner()
    {
        return $this->belongsTo(owners::class,'id_owner', 'id');
    }

    public function specie()
    {
        return $this->belongsTo(Species::class,'id_specie', 'id');
    }

    public function accredited()
    {
        return $this->belongsTo(Accredited::class,'id_accredited_responsible', 'id');
    }

}

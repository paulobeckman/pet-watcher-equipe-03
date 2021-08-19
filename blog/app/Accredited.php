<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accredited extends Model
{
    protected $table = 'accrediteds';
    protected $fillable = [
        'cnpj',
        'state_registration',
        'corporate_reason',
        'phone',
        'email',
        'address'
    ];
    public function accredited()
    {
        return $this->hasMany(Licenses::class,'id_accredited', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Accredited extends Model
{
    use HasRoles;
    protected $table = 'accrediteds';
    protected $fillable = [
        'cnpj',
        'state_registration',
        'corporate_reason',
        'phone',
        'email',
        'address',
        'status'
    ];
    // public function accredited()
    // {
    //     return $this->hasMany(Licenses::class,'id_accredited', 'id');
    // }
    // public function reponsible()
    // {
    //     return $this->hasMany(owners::class,'id_accredited_responsible', 'id');
    // }
   

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licenses extends Model
{
    protected $table = 'licenses';
    protected $fillable = [
        'date_license', 
        'date_due',
        'date_revocation',
        'id_accredited',
        'id_user'
    ];
    public function license()
    {
        return $this->belongsTo(Accredited::class,'id_accredited', 'id');
    }

}

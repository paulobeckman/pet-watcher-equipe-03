<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owners extends Model
{
    protected $table = 'owners';
    protected $fillable = [
            'person_type',
            'cpf_cnpj',
            'full_name',
            'phone',
            'email',
            'address',
        ];
}

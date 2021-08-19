<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'full_name',
        'cpf',
        'phone',
        'email',
        'address' ,
        'id_accredited'
    ];
}
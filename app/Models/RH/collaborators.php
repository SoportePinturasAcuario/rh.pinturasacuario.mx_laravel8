<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class collaborators extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = [
        'key',
        'name_collaborator',
        'age',
        'sex',
        'place_of_birth',
        'date_of_birth',
        'schooling',
        'phone',
        'email',
        'street_number',
        'colony',
        'municipality',
        'cp',
        'fathers_name',
        'mother_name',
        'marital_status',
        'spouse',
        'children_one',
        'children_two',
        'children_three',
        'no_imss',
        'rfc',
        'curp',
        'credit_Infonavit',
        'amount',
        


        
    ];
    // protected $hidden=[
    // ];
}

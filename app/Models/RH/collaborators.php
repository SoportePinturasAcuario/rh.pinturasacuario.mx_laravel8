<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class collaborators extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id_collaborator';
    protected $fillable = [
        'name_collaborator',
        'sexo_collaborator',
        'date_of_birth_collaborator',
        'ec_collaborator',
        'rshift_collaborator',
        'ocupation_collaborator',
        'folio_collaborator',
        'years_experience_collaborator',
        'month_collaborator',
        'status_collaborator',
    ];
    protected $hidden=[
        'id_branch',
        'id_departament',
        'id_type_position',
        'id_type_contracts',
        'id_type_personnel',
        'id_type_day',
        'id_type_education',
    ];
}

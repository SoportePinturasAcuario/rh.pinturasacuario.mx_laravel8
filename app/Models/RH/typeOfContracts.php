<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeOfContracts extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey= 'id_type_contracts';
    protected $fillable = ['name_type_contracts'];
}

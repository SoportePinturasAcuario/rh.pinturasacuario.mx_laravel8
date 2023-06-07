<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeOfPersonnels extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id_type_personnel';
    protected $fillable = ['name_type_personnel'];
}

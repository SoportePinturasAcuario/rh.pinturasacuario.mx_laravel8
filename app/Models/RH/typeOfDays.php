<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeOfDays extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey= 'id_type_day';
    protected $fillable = ['name_type_day']; 
}

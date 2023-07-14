<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class centers extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id_center';
    protected $fillable = ['name_center'];
}

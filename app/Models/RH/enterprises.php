<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class enterprises extends Model
{
    use HasFactory,SoftDeletes;
    protected $primaryKey = 'id_enterprise';
    protected $fillable = ['name_enterprise'];
}

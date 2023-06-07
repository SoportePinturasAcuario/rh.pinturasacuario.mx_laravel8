<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class branchs extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id_branch';
    protected $fillable =['name_branch'];
}

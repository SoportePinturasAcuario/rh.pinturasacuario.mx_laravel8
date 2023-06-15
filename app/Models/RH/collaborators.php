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
                'id',
                'key',
                'name_collaborator',
                'stand',
                'department',
                'supervise',
                'activity',
                'date_of_entry',
                'antiquity',
                'nominating',
                'enterprise',
                'no_imss',
                'date_of_birth',
                'age',
                'place_of_birth',
                'rfc',
                'curp',
                'current_salary',
                'sdi',
                'weekly_or_monthly_salary',
                'pantry_vouchers',
                'savings_fund',
                'assimilated',
                'total',
                'street_number',
                'colony',
                'municipality',
                'cp',
                'phone',
                'sex',
                'schooling',
                'marital_status',
                'fathers_name',
                'mother_name',
                'spouse',
                'children',
                'start_of_contract',
                'contracted_days',
                'day_evaluation',
                'n_position',
                'replaces',
                'contracted_days_two',
                'end_of_contract',
                'credit_Infonavit',
                'amount',
                'email',
                'type_of_employee',
                'has_a_credential',
                'center',
                'payroll_area',
                'dossier',
                'new_ci',
                'avc',
                'pantry_voucher',
                'savings_funds',
                'assimilateds',
                'Address',
                'vouchers_cct',
                'emple_fapasa_number',
                'recruiter',
                'daily_wage_imss_more_assimilated',
                'hc',
                'increase_90_days',
        
    ];
    // protected $hidden=[
    // ];
}

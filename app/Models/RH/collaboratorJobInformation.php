<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class collaboratorJobInformation extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = [
        'key_collaborator',
        'stand',
        'department',
        'supervise',
        'activity',
        'nominating',
        'enterprise',
        'current_salary',
        'sdi',
        'weekly_or_monthly_salary',
        'pantry_vouchers',
        'savings_fund',
        'assimilated',
        'total',
        'date_of_entry',
        'start_of_contract',
        'contracted_days',
        'day_evaluation',
        'contracted_days_two',
        'end_of_contract',
        'antiquity',
        'n_position',
        'replaces',
        'type_of_employee',
        'has_a_credential',
        'center',
        'payroll_area',
        'dossier',
        'new_ci',
        'avc',
        'pantry_voucher_two',
        'savings_fund_two',
        'assimilateds',
        'daily_wage_imss_more_assimilated',
        'hc',
        'increase_90_days',
        'Address',
        // 'vouchers_cct',
        // 'emple_fapasa_number',
        'recruiter',
    ];
}

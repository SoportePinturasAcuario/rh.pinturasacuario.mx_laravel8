<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->increments('id',)->unique()->nullable();
            $table->string('key')->unique()->nullable();
            $table->string('name_collaborator',191)->nullable();
            $table->string('stand',191);
            $table->string('department',191);
            $table->string('supervise',191);
            $table->string('activity',191);
            $table->date('date_of_entry');
            $table->integer('antiquity');
            $table->string('nominating',191);
            $table->string('enterprise',191);
            $table->integer('no_imss');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('place_of_birth',191);
            $table->string('rfc',13);
            $table->string('curp',18);
            $table->double('current_salary',10,2);
            $table->double('sdi',10,2);
            $table->double('weekly_or_monthly_salary',10,2);
            $table->double('pantry_vouchers',10,2);
            $table->double('savings_fund',10,2);
            $table->integer('assimilated');
            $table->double('total',10,2);
            $table->string('street_number',191);
            $table->string('colony',191);
            $table->string('municipality',191);
            $table->integer('cp');
            $table->json('phone');
            $table->boolean('sex');
            $table->string('schooling',191);
            $table->string('marital_status',191);
            $table->string('fathers_name',191);
            $table->string('mother_name',191);
            $table->string('spouse',191);
            $table->json('children');
            $table->date('start_of_contract');
            $table->integer('contracted_days');
            $table->date('day_evaluation');
            $table->string('n_position',191);
            $table->string('replaces',191);
            $table->date('contracted_days_two');
            $table->date('end_of_contract');

            $table->string('credit_Infonavit',191);
            $table->double('amount',10,2);
            $table->string('email',191);

            $table->string('type_of_employee',191);
            $table->double('has_a_credential',10,2);
            $table->string('center',191);
            $table->string('payroll_area',191);
            $table->boolean('dossier');
            $table->boolean('new_ci');
            $table->string('avc',191);
            $table->string('pantry_voucher',191);
            $table->string('savings_funds',191);
            $table->string('assimilateds',191);
            $table->string('Address',191);
            $table->string('vouchers_cct',191);
            $table->string('emple_fapasa_number',191);
            $table->string('recruiter',191);
            $table->double('daily_wage_imss_more_assimilated',10,2);
            $table->boolean('hc');
            $table->double('increase_90_days');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborators');
    }
}

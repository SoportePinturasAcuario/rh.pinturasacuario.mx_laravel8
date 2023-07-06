<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorJobInformationTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborator_job_information', function (Blueprint $table) {
            $table->increments('id')->unique()->nullable();
            $table->string('key_collaborator',5)->unique();
            $table->foreign('key_collaborator')->references('key')->on('collaborators');
            $table->string('stand',191);
            $table->string('department',191);
            $table->string('supervise',191);
            $table->string('activity',191);
            $table->string('nominating',191);
            $table->string('enterprise',191);
            $table->double('current_salary',10,2);
            $table->double('sdi',10,2);
            $table->double('weekly_or_monthly_salary',10,2);
            $table->double('pantry_vouchers',10,2);
            $table->double('savings_fund',10,2);
            $table->double('assimilated',10,2);
            $table->double('total',20,2);
            $table->date('date_of_entry');
            $table->date('start_of_contract');
            $table->unsignedInteger('contracted_days');
            $table->date('day_evaluation');
            $table->date('contracted_days_two');
            $table->date('end_of_contract');
            $table->integer('antiquity');
            $table->string('n_position',191);
            $table->string('replaces',191);
            $table->string('type_of_employee',191);
            $table->double('has_a_credential',10,2);
            $table->string('center',191);
            $table->string('payroll_area',191);
            $table->boolean('dossier');
            $table->boolean('new_ci');
            $table->string('avc',191);
            $table->string('pantry_voucher_two',191);
            $table->string('savings_fund_two',191);
            $table->string('assimilateds',191);
            $table->double('daily_wage_imss_more_assimilated',10,2);
            $table->boolean('hc');
            $table->double('increase_90_days');
            $table->string('Address',191);
            $table->string('vouchers_cct',191);
            $table->string('emple_fapasa_number',191);
            // $table->string('recruiter',191);

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
        Schema::dropIfExists('collaborator_job_information');
    }
}

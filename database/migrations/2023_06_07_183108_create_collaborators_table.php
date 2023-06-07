<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->increments('id_collaborator',11)->nullable()->unique();
            $table->string('name_collaborator',191)->nullable();
            $table->boolean('sexo_collaborator');
            $table->string('date_of_birth_collaborator',191);
            $table->integer('ec');
            $table->string('rshift_collaborator',191)->nullable();
            $table->string('ocupation_collaborator',191);
            $table->string('folio_collaborator',191)->unique();
            $table->integer('years_experience_collaborator');
            $table->integer('month_collaborator');
            $table->integer('status_collaborator')->nullable();
            
            $table->integer('id_branch')->unsigned();
            $table->foreign('id_branch')->references('id_branch')->on('branchs');

            $table->integer('id_departament')->unsigned();
            $table->foreign('id_departament')->references('id_departament')->on('departaments');

            $table->integer('id_type_position')->unsigned();
            $table->foreign('id_type_position')->references('id_type_position')->on('type_of_positions');

            $table->integer('id_type_contracts')->unsigned();
            $table->foreign('id_type_contracts')->references('id_type_contracts')->on('type_of_contracts');

            $table->integer('id_type_personnel')->unsigned();
            $table->foreign('id_type_personnel')->references('id_type_personnel')->on('type_of_personnels');

            $table->integer('id_type_day')->unsigned();
            $table->foreign('id_type_day')->references('id_type_day')->on('type_of_days');

            $table->integer('id_type_education')->unsigned();
            $table->foreign('id_type_education')->references('id_type_education')->on('type_of_educations');
            
            $table->timestamps();
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

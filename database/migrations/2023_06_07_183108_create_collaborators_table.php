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
            $table->string('key',5)->unique()->nullable();
            $table->string('name_collaborator',191)->nullable();
            $table->unsignedSmallInteger('age');
            $table->string('sex',10);
            $table->string('place_of_birth',191);
            $table->date('date_of_birth');
            $table->string('schooling',191);
            $table->bigInteger('phone');
            $table->string('email',191);
            $table->string('street_number',191);
            $table->string('colony',191);
            $table->string('municipality',191);
            $table->unsignedSmallInteger('cp');
            $table->string('fathers_name',191);
            $table->string('mother_name',191);
            $table->string('marital_status',191);
            $table->string('spouse',191);
            $table->unsignedSmallInteger('children_one');
            $table->unsignedSmallInteger('children_two');
            $table->unsignedSmallInteger('children_three');
            $table->unsignedBigInteger('no_imss');
            $table->string('rfc',13);
            $table->string('curp',18);
            $table->unsignedBigInteger('credit_Infonavit');
            $table->unsignedInteger('amount');
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

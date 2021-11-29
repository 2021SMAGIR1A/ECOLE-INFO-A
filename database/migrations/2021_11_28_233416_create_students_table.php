<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 250);
            $table->string('matricule', 250);
            $table->string('firstname', 250);
            $table->string('lastname', 250);
            $table->string('email', 250);
            $table->string('contact', 250)->nullable();
            $table->datetime('birthdate')->nullable();
            $table->integer('classes_id');
            $table->integer('users_id');
        
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        
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
        Schema::dropIfExists('students');
    }
}


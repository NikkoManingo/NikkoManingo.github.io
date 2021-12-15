<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('pet_id')->nullable();
            $table->foreign('pet_id')->references('pet_id')->on('pets')->onDelete('cascade');
            $table->string('dateOfvisit');
            $table->string('time');
            $table->string('diagnosis');
            $table->string('veterinarian');
            $table->string('testPerformed');
            $table->string('testResult');
            $table->string('medication');
            $table->string('dosage');
            $table->string('comments');
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
        Schema::dropIfExists('patients');
    }
}

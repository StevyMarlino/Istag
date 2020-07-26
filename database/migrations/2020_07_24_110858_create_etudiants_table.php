<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->date('date_born');
            $table->string('phone');
            $table->string('lieu');
            $table->string('transaction');
            $table->enum('level',['1','2','3','4','5']);
            $table->enum('filiere',['info_com','gestion','technology','sante']);
            $table->enum('cours',['jour','soir']);

            $table->string('acte_nais')->nullable();
            $table->string('bacc')->nullable();
            $table->string('releve_note')->nullable();

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
        Schema::dropIfExists('etudiants');
    }
}

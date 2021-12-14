<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {  
            $table->id();
            $table->string('nom_ent')->nullable(false)->unique();
            $table->string('rue_ent')->nullable(false);
            $table->string('code_postal_ent',5)->nullable(false);
            $table->string('ville_ent')->nullable(false);
            $table->string('numero_telephone_ent',10)->unique();
            $table->string('email_ent')->unique()->nullable(false); 
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
        Schema::dropIfExists('entreprise');
    }
}

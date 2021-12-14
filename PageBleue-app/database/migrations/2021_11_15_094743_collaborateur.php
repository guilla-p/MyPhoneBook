<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Collaborateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('nom_collab')->nullable(false);
            $table->string('prenom_collab')->nullable(false);
            $table->string('rue_collab')->nullable(false);
            $table->string('code_postal_collab',5)->nullable(false);
            $table->string('ville_collab')->nullable(false);
            $table->string('numero_telephone_collab',10)->unique();
            $table->string('email_collab')->unique()->nullable(false);
            $table->string('entreprise_collab')->nullable(false);
            $table->foreign('entreprise_collab')->references('nom_ent')->on('entreprises');
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
        Schema::dropIfExists('collaborateurs');
    }
}

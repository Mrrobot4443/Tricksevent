<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on ('categories')->onDelete('cascade');
            $table->unsignedBigInteger('villes_id');
            $table->foreign('villes_id')->references('id')->on ('villes')->onDelete('cascade');
            // $table->foreignId('category_id');
            // $table->foreignId('ville_id');
            $table->longText('content');
            $table->string('prix')->nullable();
            $table->timestamp('date_debut');
            $table->timestamp('date_fin')->nullable();
            $table->string('sponsor');
            $table->string('user_type');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('events');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('specie', 20);
            $table->date('date_of_birth')->nullable();
            $table->string('genre', 10)->nullable();
            $table->string('owner',40);
            $table->tinyInteger('weight')->nullable();
            $table->string('size');
            $table->text('img_link')->nullable();
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
        Schema::dropIfExists('animals');
    }
};

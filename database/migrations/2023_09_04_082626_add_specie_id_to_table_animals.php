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
        Schema::table('animals', function (Blueprint $table) {
            $table->unsignedBigInteger('specie_id')->nullable()->after('id');
            $table->foreign('specie_id')->references('id')->on('species')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_animals', function (Blueprint $table) {
            $table->dropForeign('animals_specie_id_foreign');
            $table->dropColumn('specie_id');
        });
    }
};

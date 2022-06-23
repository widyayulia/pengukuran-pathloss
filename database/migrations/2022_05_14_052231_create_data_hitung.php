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
        Schema::create('data_hitung', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasibtsId')->constrained('bts_locations')->cascadeOnDelete();
            $table->integer('jarak');
            $table->integer('frekuensi');
            $table->integer('hB');
            $table->integer('hM');
            $table->integer('Amu');
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
        Schema::dropIfExists('data_hitung');
    }
};

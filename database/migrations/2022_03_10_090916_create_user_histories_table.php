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
        Schema::create('user_histories', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->float('jarak', 11);
            $table->foreignId('bts_location_id')->constrained('bts_locations')->cascadeOnDelete();
            $table->float('model_okumura',11);
            $table->float('model_hatta',11);
            $table->float('model_cost231',11);
            $table->float('kuat_sinyal',11);
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
        Schema::dropIfExists('user_histories');
    }
};

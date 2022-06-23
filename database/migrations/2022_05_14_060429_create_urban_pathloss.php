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
        Schema::create('urban_pathloss', function (Blueprint $table) {
            $table->id();
            $table->float('latitude', 11,8);
            $table->float('longitude',  11,8);
            $table->integer('distance');
            $table->float('kuat_sinyal', 8,5);
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
        Schema::dropIfExists('urban_pathloss');
    }
};

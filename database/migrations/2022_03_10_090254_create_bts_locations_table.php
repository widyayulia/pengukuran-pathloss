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
        Schema::create('bts_locations', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_daerah');
            $table->float('latitude', 11,8);
            $table->float('longitude',  11,8);
            $table->integer('hB');
            $table->integer('hM');
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
        Schema::dropIfExists('b_t_s_locations');
    }
};

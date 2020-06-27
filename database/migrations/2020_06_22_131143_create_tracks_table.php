<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('track_id')->isnullable();
            $table->string('status1')->isnullable();
            $table->string('s1date')->isnullable();
            $table->string('status2')->isnullable();
            $table->string('s2date')->isnullable();
            $table->string('report')->isnullable();
            $table->string('name')->isnullable();
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
        Schema::dropIfExists('tracks');
    }
}

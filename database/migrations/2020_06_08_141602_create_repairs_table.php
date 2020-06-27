<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('category');
            $table->string('fault');
            $table->string('brand');
            $table->string('model')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('upload')->nullable();
            $table->string('name');
            $table->string('number');
            $table->string('email')->nullable();
            $table->mediumText('address');
            $table->integer('bill')->nullable();
            $table->integer('balance')->nullable();
            $table->string('repairer')->nullable();
            $table->string('pickdate')->nullable();
            $table->string('delivered')->nullable();
            $table->string('status')->nullable();
            $table->string('pin')->nullable();
            $table->string('feedback')->nullable();
            $table->string('fresponse')->nullable();
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
        Schema::dropIfExists('repairs');
    }
}

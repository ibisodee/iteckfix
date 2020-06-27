<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profession')->nullable();
            $table->string('dob')->nullable();
            $table->string('Address')->nullable();           
            $table->string('gender')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profession');
            $table->dropColumn('dob');
            $table->dropColumn('Address');        
            $table->dropColumn('gender');
        });
    }
}

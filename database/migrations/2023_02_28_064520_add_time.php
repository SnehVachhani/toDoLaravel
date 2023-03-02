<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('list',function(Blueprint $table){
            $table->text("start")->nullable();
            $table->text("finish")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('list',function(Blueprint $table){
            $table->dropColumn("start");
            $table->dropColumn("finish");
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::table('prodis', function(Blueprint $table){
            $table->string('foto')->after('nama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(){
        Schema::table('prodis', function(Blueprint $table){
            $table->dropColumn('foto');
        });
    }
};

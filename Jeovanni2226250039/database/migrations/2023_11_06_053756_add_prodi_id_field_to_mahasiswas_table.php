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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->foreignId('prodi_id')->after('tanggal_lahir')->constrained()
                ->onDelete('cascade')->onUpdate('cascade');
        });
        // Schema::table('mahasiswa', function (Blueprint $table) {
        //     $table->unsignedBigInteger('prodi_id')->after('tanggal_lahir');
        //     $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade')
        //     ->onUpdate('cascade');
//});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign('mahasiswas_prodi_id_foreign');
                $table->dropColumn('prodi_id');
        });
    }
};

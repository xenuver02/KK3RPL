<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('table_siswa', function(Blueprint $table){
            $table->string('golongan_darah', 1)->after('JK');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_siswa', function(Blueprint $table){
            if (Schema::hasColumn('table_siswa', 'golongan_darah')) {
                $table->dropColumn('golongan_darah');
            }
        });
    }
};

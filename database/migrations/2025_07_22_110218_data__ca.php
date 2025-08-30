<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('data_ca', function (Blueprint $table){
            $table->integer('id_ca', true);
            $table->string('nama', 50)->nullable();
            $table->string('nim', 13);
            $table->string('alamat', 200)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('jenis_kelamin', 50);
            $table->string('asal_sekolah', 200);
            $table->string('agama', 50);
            $table->string('hobi' , 200);
            $table->string('keahlian', 200)->nullable();
            $table->string('alasan_bergabung', 225)->nullable();
            $table->string('foto')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_ca');
    }
};

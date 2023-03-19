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
        Schema::create('judul_portos', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->enum('juruan', ['Produksi Grafika', 'Desain Grafis', 'Animasi', 'Desain Komunikasi Visual', 'Rekayasa Perangkat Lunak']);
        $table->enum('kelas', ['10', '11', '12']);
        $table->enum('kategori', ['Animation', 'Branding', 'Illustration','Photography', 'Mobile', 'Website']);
        // $table->text('images')->nullable()->change();
        $table->string('link');
        $table->string('status')->default('pending');
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
        Schema::dropIfExists('judul_portos');
    }
};
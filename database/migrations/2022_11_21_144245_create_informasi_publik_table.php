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
        Schema::create('informasi_publik', function (Blueprint $table) {
            $table->id();
            $table->String('daftar_informasi');
            $table->text('ringkasan');
            $table->String('jenis');
            $table->string('jangka_waktu');
            $table->text('link');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_publik');
    }
};

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
        Schema::create('etk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kullanici');
            $table->string('baslik');
            $table->string('aciklama');
            $table->date('baslangic');
            $table->date('bitis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etk');
    }
};

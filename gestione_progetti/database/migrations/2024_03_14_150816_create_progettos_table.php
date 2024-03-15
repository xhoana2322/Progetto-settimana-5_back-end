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
        Schema::create('progettos', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->string('descrizione');
            $table->foreignId('users_id');
            $table->foreign('users_id')->on('users')->references('id')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('attivitas_id');
            $table->foreign('attivitas_id')->on('attivitas')->references('id')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progettos');
    }
};

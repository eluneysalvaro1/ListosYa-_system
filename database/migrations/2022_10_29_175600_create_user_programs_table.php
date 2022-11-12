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
        Schema::create('user_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('program_id')->constrained();
            $table->foreignId('duo_id')->constrained('users')->nullable()->default(null);
            $table->integer('turn')->nullable()->default(null);
            $table->enum('postulation_state', ['Espera' , 'Aceptada' , 'Rechazada', 'Baja']);
            $table->boolean('asistance')->nullable();
            $table->string('observation')->nullable();
            $table->boolean('qualified')->nullable();
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
        Schema::dropIfExists('user_programs');
    }
};

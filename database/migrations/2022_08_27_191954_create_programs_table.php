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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('finish_date');
            $table->time('start_time'); 
            $table->time('finish_time');
            $table->integer('volunteer_limit')->nullable();
            $table->string('place_event');
            $table->string('program_image')->nullable();
            $table->integer('program_points');
            $table->enum('state', ['finish' , 'open_to_postulated' , 'close_to_postulated']);
            $table->foreignId('category_id')->constrained();
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
        Schema::dropIfExists('programs');
    }
};

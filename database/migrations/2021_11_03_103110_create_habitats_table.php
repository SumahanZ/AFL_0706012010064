<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitats', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('code')->primary();
            $table->string('name')->unique();
            $table->string('humidity');
            $table->string('min_size');
            $table->string('max_size');
            $table->text('description');
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
        Schema::dropIfExists('habitats');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('accessories', 50);
            $table->string('color', 50)->nullable;
            $table->tinyInteger('legs');
            $table->tinyInteger('keys');
            $table->tinyInteger('inches');
            $table->tinyInteger('control');
            $table->text('description');
            $table->string('comment')->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('tvs');
    }
}

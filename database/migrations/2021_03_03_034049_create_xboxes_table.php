<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xboxes', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('accessories', 50);
            $table->string('color', 50)->nullable;
            $table->string('generation', 50);
            $table->tinyInteger('control');
            $table->tinyInteger('games');
            $table->tinyInteger('launch');
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
        Schema::dropIfExists('xboxes');
    }
}

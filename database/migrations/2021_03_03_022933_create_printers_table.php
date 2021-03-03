<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('accessories', 50);
            $table->string('color', 50)->nullable;
            $table->string('connectivity', 50);
            $table->string('printcolor', 50);
            $table->tinyInteger('resolution');
            $table->tinyInteger('speed');
            $table->tinyInteger('pagesperminute');
            $table->tinyInteger('keys');
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
        Schema::dropIfExists('printers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pops', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('key_word', 100);
            $table->string('description', 2000);
            $table->string('image', 30)->nullable();
            $table->foreignId('categories_id')->constrained();
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
        Schema::dropIfExists('pops');
    }
}

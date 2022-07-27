<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('especie_id')->constrained();
            $table->foreignId('owner_id')->constrained();
            $table->string('name');
            $table->string('breed');
            $table->string('age');
            $table->decimal('weight')->null();
            $table->string('size')->null();
            $table->longText('observations');
            $table->string('vaccines');
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
        Schema::dropIfExists('pets');
    }
}

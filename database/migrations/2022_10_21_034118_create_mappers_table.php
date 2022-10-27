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
        Schema::create('mappers', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('description');
            $table->text('lat');
            $table->text('lon');
            $table->string('icon')->default('img/lodge.jpg');
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
        Schema::dropIfExists('mapper');
    }
};

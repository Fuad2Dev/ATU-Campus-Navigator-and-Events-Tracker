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
        Schema::create('association_user', function (Blueprint $table) {
            $table->string('user_id', 9);
            $table->string('association_id', 6);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('association_id')->references('id')->on('associations');
            $table->foreignId('role_id');
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
        Schema::dropIfExists('association_user');
    }
};

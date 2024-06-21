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
        Schema::create('setings', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->string('phone');
            $table->string('lat');
            $table->string('long');
            $table->string('name');
            $table->string('logo');
            $table->string('facebook')->nullable();
            $table->string('whatsap')->nullable();
            $table->string('instgram')->nullable();
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
        Schema::dropIfExists('setings');
    }
};

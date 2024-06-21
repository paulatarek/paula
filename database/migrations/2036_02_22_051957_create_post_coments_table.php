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
        Schema::create('post_coments', function (Blueprint $table) {
            $table->id();
            $table->string('contant');
            $table->foreignId('post_id')->constrained('posts')->cascadeOnDelete();
            // $table->foreignId('coment_id')->constrained('coments')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('parent_id')->constrained('post_coments')->cascadeOnDelete();
             $table->softDeletes();
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
        Schema::dropIfExists('post_coments');
    }
};

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
        Schema::create('product_atrybutes', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('atrripute_id')->constrained('atrributes')->cascadeOnDelete();
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
        Schema::dropIfExists('product_atrybutes');
    }
};

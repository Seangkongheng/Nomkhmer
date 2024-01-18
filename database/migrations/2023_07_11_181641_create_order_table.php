<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('Fistname');
            $table->string('lastName');
            $table->string('email');
            $table->string('phoneNum');
            $table->string('address1');
            $table->string('address2');
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->string('contry');
            $table->string('pincode');
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
            $table->string('trackingNun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};

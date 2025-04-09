<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pet_ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('age'); // Age in months
            $table->string('breed');
            $table->boolean('pedigree');
            $table->text('description');
            $table->string('phone_number');
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();           
            $table->timestamps();
            $table->foreignId('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pet_ads');
    }
};


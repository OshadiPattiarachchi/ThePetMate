<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('pet_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Link to users table
            $table->string('type');
            $table->string('name');
            $table->string('gender');
            $table->string('breed');
            $table->boolean('pedigree_tested');
            $table->boolean('dna_tested');
            $table->boolean('vaccinated');
            $table->string('size');
            $table->integer('age');
            $table->float('weight');
            $table->string('photos')->nullable(); // Assuming a path to stored photos
            $table->string('city');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pet_profiles');
    }
}

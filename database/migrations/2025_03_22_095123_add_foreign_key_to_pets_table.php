<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('pets', function (Blueprint $table) {
           // $table->unsignedBigInteger('user_id')->nullable()->default(0);;
            // Add the foreign key constraint on user_id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    
    public function down(): void
    {
        Schema::table('pets', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    } 
};

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
        
        /*
        Schema::table('pets', function (Blueprint $table) {
            // Modify the user_id column to add a default value (e.g., 0 or a specific ID)
            $table->unsignedBigInteger('user_id')->nullable()->default(0)->change();  // Default value set to 0
        });
     */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
         /*
        Schema::table('pets', function (Blueprint $table) {
            $table->dropColumn('user_id');  // Optionally drop the column if you want to roll back
        });
     */
    }
};

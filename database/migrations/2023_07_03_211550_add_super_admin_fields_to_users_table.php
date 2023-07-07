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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->boolean('is_super_admin')->default(false);
            $table->string('profile_image')->nullable();
            
            // Add any other columns you may need for the super admin
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
         
        $table->dropColumn('is_super_admin');
        $table->dropColumn('first_name');
        $table->dropColumn('last_name');
        $table->dropColumn('email');
        $table->dropColumn('profile_image');
        $table->dropColumn('password');
        // Drop any other columns added for the super admin
    });
    }
};

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
          $table->string('profile_pic')->nullable();
          $table->string('about')->nullable();
          $table->string('passport_no')->nullable();
          $table->string('postal_address')->nullable();
          $table->string('mobile_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_pic');
            $table->dropColumn('about');
            $table->dropColumn('passport_no');
            $table->dropColumn('postal_address');
            $table->dropColumn('mobile_no');
           });
    }
};

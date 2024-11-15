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
            // Add 'phone_number' as a string with a reasonable length
            $table->string('phone_number', 20)->nullable()->after('email');

            // Add 'phone_type' as an enum for predefined types
            $table->enum('phone_type', ['home', 'office', 'work', 'cell'])->nullable()->after('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone_number', 'phone_type']);
        });
    }
};

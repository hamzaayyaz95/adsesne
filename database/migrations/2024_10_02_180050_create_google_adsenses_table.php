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
         Schema::create('google_adsenses', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('adsense_type');
            $table->text('script_code');
            $table->enum('status', ['active', 'deactivated'])->default('deactivated');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_adsenses');
    }
};
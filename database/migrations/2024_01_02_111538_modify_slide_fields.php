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
        Schema::table('slides', function (Blueprint $table) {
            $table->string('title', 150)->nullable()->change();
            $table->string('subtitle', 150)->nullable()->change();
            $table->string('slideimage', 150)->default("No Image")->change();
            $table->string('description', 5000)->default("No description")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

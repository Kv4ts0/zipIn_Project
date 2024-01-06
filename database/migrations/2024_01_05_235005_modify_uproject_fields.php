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
        Schema::table('uprojects', function (Blueprint $table) {
            $table->string('name', 150)->nullable()->change();
            $table->string('image1', 150)->default("No Image")->change();
            $table->string('image2', 150)->default("No Image")->change();
            $table->string('image3', 150)->default("No Image")->change();
            $table->string('image4', 150)->default("No Image")->change();
            $table->string('step1', 150)->nullable()->change();
            $table->string('step2', 150)->nullable()->change();
            $table->string('step3', 150)->nullable()->change();
            $table->string('step4', 150)->nullable()->change();
            $table->string('step5', 150)->nullable()->change();
            $table->string('description', 3000)->default("No description")->change();
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

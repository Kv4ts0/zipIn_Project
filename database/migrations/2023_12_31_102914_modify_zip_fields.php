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
        Schema::table('zips', function (Blueprint $table) {
            $table->string('name', 150)->nullable()->change();
            $table->string('location', 150)->nullable()->change();
            $table->string('image1', 150)->default("No Image")->change();
            $table->string('image2', 150)->default("No Image")->change();
            $table->string('image3', 150)->default("No Image")->change();
            $table->string('image4', 150)->default("No Image")->change();
            $table->double('price')->default(0)->change();
            $table->string('description', 2000)->default("No description")->change();
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

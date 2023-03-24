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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('tehnologies');
            $table->string('website')->nullable();;
            $table->string('location');       
            $table->string('job_link')->nullable();
            $table->longText('description');
            $table->longText('comment')->nullable();
            $table->string('status');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};

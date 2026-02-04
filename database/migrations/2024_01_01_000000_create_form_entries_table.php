<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('form_entries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('mobile', 20);
            $table->string('email', 150)->unique();
            $table->string('city', 120);
            $table->string('country', 120)->default('India');
            $table->string('state', 120);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('form_entries');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inquiries', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 150);
            $table->string('phone', 40);
            $table->string('email')->nullable();
            $table->string('relationship', 150);
            $table->string('location');
            $table->string('barangay', 120);
            $table->string('city', 120);
            $table->string('province', 120);
            $table->string('property_type', 120);
            $table->string('area', 100);
            $table->string('title_type', 180)->nullable();
            $table->string('occupancy', 150)->nullable();
            $table->string('price', 80);
            $table->string('negotiable', 80)->nullable();
            $table->string('timeline', 120)->nullable();
            $table->json('photos')->nullable();
            $table->text('details')->nullable();
            $table->boolean('accurate');
            $table->boolean('authorized');
            $table->boolean('consent');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};

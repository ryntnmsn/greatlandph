<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('property_evaluations', function (Blueprint $table): void {
            $table->id();
            $table->string('owner_name', 150);
            $table->string('completing_person', 150);
            $table->string('relationship_to_owner', 150)->nullable();
            $table->string('phone', 40);
            $table->string('email');
            $table->string('registered_owners', 80);
            $table->string('parties_willing', 80);
            $table->string('inheritance_settled', 80);
            $table->string('location', 500);
            $table->string('barangay', 120);
            $table->string('city', 120);
            $table->string('province', 120);
            $table->string('property_reference')->nullable();
            $table->string('title_number', 120)->nullable();
            $table->decimal('land_area', 14, 2);
            $table->string('dimensions')->nullable();
            $table->string('current_use', 100);
            $table->string('condition', 100);
            $table->string('road_access', 150);
            $table->string('utilities', 150);
            $table->string('physical_concerns', 100);
            $table->text('physical_concerns_details')->nullable();
            $table->string('maps_link', 2000)->nullable();
            $table->json('documents_available')->nullable();
            $table->string('encumbrance', 80);
            $table->text('encumbrance_details')->nullable();
            $table->string('taxes_up_to_date', 80);
            $table->string('occupancy_agreement', 80);
            $table->text('occupancy_details')->nullable();
            $table->string('transfer_restrictions', 80);
            $table->text('restrictions_details')->nullable();
            $table->decimal('expected_price', 18, 2);
            $table->string('price_negotiable', 100);
            $table->string('sale_timeline', 100);
            $table->text('reason_for_selling')->nullable();
            $table->text('other_terms')->nullable();
            $table->boolean('confirm_accuracy');
            $table->boolean('confirm_authority');
            $table->boolean('confirm_due_diligence');
            $table->boolean('confirm_no_commitment');
            $table->boolean('confirm_privacy_consent');
            $table->json('documents')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_evaluations');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'owner_name',
    'completing_person',
    'relationship_to_owner',
    'phone',
    'email',
    'registered_owners',
    'parties_willing',
    'inheritance_settled',
    'location',
    'barangay',
    'city',
    'province',
    'property_reference',
    'title_number',
    'land_area',
    'dimensions',
    'current_use',
    'condition',
    'road_access',
    'utilities',
    'physical_concerns',
    'physical_concerns_details',
    'maps_link',
    'documents_available',
    'encumbrance',
    'encumbrance_details',
    'taxes_up_to_date',
    'occupancy_agreement',
    'occupancy_details',
    'transfer_restrictions',
    'restrictions_details',
    'expected_price',
    'price_negotiable',
    'sale_timeline',
    'reason_for_selling',
    'other_terms',
    'confirm_accuracy',
    'confirm_authority',
    'confirm_due_diligence',
    'confirm_no_commitment',
    'confirm_privacy_consent',
    'documents',
])]
class PropertyEvaluation extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'documents_available' => 'array',
            'documents' => 'array',
            'land_area' => 'decimal:2',
            'expected_price' => 'decimal:2',
            'confirm_accuracy' => 'boolean',
            'confirm_authority' => 'boolean',
            'confirm_due_diligence' => 'boolean',
            'confirm_no_commitment' => 'boolean',
            'confirm_privacy_consent' => 'boolean',
        ];
    }
}

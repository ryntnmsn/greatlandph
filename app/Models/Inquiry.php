<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'phone',
    'email',
    'relationship',
    'location',
    'barangay',
    'city',
    'province',
    'property_type',
    'area',
    'title_type',
    'occupancy',
    'price',
    'negotiable',
    'timeline',
    'photos',
    'details',
    'accurate',
    'authorized',
    'consent',
])]
class Inquiry extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'photos' => 'array',
            'accurate' => 'boolean',
            'authorized' => 'boolean',
            'consent' => 'boolean',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Tenant extends Model
{
    use HasFactory;
    protected $tenant;

    public function property_Tenants()
    {
    return $this->belongsToMany(Property::class, "Property_Tenants");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Property extends Model
{
    use HasFactory;
    protected $Property;

    public function property_Tenants()
    {
    return $this->belongsToMany(Tenants::class, "Property_Tenants");
    }

    public function Leases()
    {
    return $this->hasMany(Lease::class);
    }
}

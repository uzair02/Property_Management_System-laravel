<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_Tenant extends Model
{
    protected $Property_Tenants;

    use HasFactory;
    public function property()
    {
    return $this->belongsTo(Property::class);
    }

    public function tenant()
    {
    return $this->belongsTo(Tenant::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentBrand extends Model
{
    use HasFactory;

    protected $table = "component_brands";
    protected $primaryKey = "component_brand_id";

    protected $fillable = [
        "component_brand_name",
    ];

    public function pc_components()
    {
        return $this->hasMany(PcComponent::class, "component_brand_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentFormFactor extends Model
{
    use HasFactory;

    protected $table = "component_form_factors";
    protected $primaryKey = "component_form_factor_id";

    protected $fillable = [
        'component_form_factor_name'
    ];

    public function pc_components()
    {
        return $this->hasMany(PcComponent::class, 'component_form_factor_id');
    }
}

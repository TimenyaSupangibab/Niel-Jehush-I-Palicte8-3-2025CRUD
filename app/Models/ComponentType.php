<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
    use HasFactory;

    protected $table = "component_types";
    protected $primaryKey = "component_type_id";

    protected $fillable = [
        'component_type_name'
    ];

    public function pc_components()
    {
        return $this->hasMany(PcComponent::class, 'component_type_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentRamType extends Model
{
    use HasFactory;

    protected $table = "component_ram_types";
    protected $primaryKey = "component_ram_type_id";

    protected $fillable = [
        'component_ram_type_name',
    ];

    public function pc_components()
    {
        return $this->hasMany(PcComponent::class, 'component_ram_type_id');
    }
}

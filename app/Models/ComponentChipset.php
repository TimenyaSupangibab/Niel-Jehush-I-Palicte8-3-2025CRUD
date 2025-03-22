<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentChipset extends Model
{
    use HasFactory;

    protected $table = "component_chipsets";
    protected $primaryKey = "component_chipset_id";

    protected $fillable = [
        'component_chipset_name',
    ];

    public function pc_components()
    {
        return $this->hasMany(PcComponent::class, 'component_chipset_type_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcComponent extends Model
{
    use HasFactory;

    protected $table = "pc_components";
    protected $primaryKey = "pc_component_id";

    protected $fillable = [
        'pc_component_name',
        'component_type_id',
        'component_brand_id',
        'component_socket_id',
        'component_chipset_id',
        'component_form_factor_id',
        'component_ram_type_id',
        'pc_component_price',
        'pc_component_is_deleted',
    ];

    // Define relationships
    public function component_type()
    {
        return $this->belongsTo(ComponentType::class, 'component_type_id', 'component_type_id');
    }

    public function component_brand()
    {
        return $this->belongsTo(ComponentBrand::class, 'component_brand_id', 'component_brand_id');
    }

    public function component_socket()
    {
        return $this->belongsTo(ComponentSocket::class, 'component_socket_id', 'component_socket_id');
    }

    public function component_chipset()
    {
        return $this->belongsTo(ComponentChipset::class, 'component_chipset_id', 'component_chipset_id');
    }

    public function component_form_factor()
    {
        return $this->belongsTo(ComponentFormFactor::class, 'component_form_factor_id', 'component_form_factor_id');
    }

    public function component_ram_type()
    {
        return $this->belongsTo(ComponentRamType::class, 'component_ram_type_id', 'component_ram_type_id');
    }
}

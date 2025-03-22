<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBuildComponent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_build_id',
        'pc_component_id',
        'user_build_components_date_added',
        'user_build_components_date_modified'
    ];

    public function user_build()
    {
        return $this->belongsTo(UserBuild::class, 'user_build_id');
    }

    public function pc_components()
    {
        return $this->belongsTo(PcComponent::class, 'pc_component_id');
    }
}

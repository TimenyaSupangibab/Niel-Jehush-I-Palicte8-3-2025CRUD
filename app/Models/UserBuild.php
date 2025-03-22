<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBuild extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_build_name',
        'user_build_total_wattage',
        'user_build_total_price',
        'user_build_date_added',
        'user_build_date_modified',
        'user_build_is_deleted'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user_build_components()
    {
        return $this->hasMany(UserBuildComponent::class, 'user_build_id');
    }
}

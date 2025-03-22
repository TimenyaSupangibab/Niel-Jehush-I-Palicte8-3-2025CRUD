<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentSocket extends Model
{
    use HasFactory;

    protected $table = "component_sockets";
    protected $primaryKey = "component_socket_id";

    protected $fillable = [
        'component_socket_name'
    ];

    public function pc_components()
    {
        return $this->hasMany(PcComponent::class, 'component_socket_id');
    }
}

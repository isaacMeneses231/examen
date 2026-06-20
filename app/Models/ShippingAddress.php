<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShippingAddress extends Model
{
    protected $fillable = [
        'client_id',
        'number',
        'street',
        'neighborhood',
        'city',
        'location_reference',
        'address_status'
        
    ];

    public function client() 
    {
        return $this->belongsTo( Client::class);
    }

    public function orders()
    {
        return $this->hasMany( Order::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'balance',
        'credit_limit',
        'discount',
        'registration_date',
        'client_status'
    ];

    public function shippingAddresses(): HasMany
    {
        return $this->hasMany(related: ShippingAddress::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(related: Order::class);
    }
}
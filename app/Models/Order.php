<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        
        'order_date',
        'subtotal',
        'iva_amount',
        'general_total',
        'additional_notes',
        'order_status',
        'client_id',
        'shipping_address_id'
    ];

    public function client()
    {
        return $this->belongsTo( Client::class);
    }

    public function shippingAddress()
    {
        return $this->belongsTo( ShippingAddress::class);
    }

    public function orderLines()
    {
        return $this->hasMany( OrderLine::class);
    }
}
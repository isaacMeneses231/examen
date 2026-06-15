<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'shipping_address_id',
        'creation_date_time',
        'subtotal',
        'tax_amount',
        'general_total',
        'additional_notes',
        'order_status'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(related: Client::class);
    }

    public function shippingAddress(): BelongsTo
    {
        return $this->belongsTo(related: ShippingAddress::class);
    }

    public function orderLines(): HasMany
    {
        return $this->hasMany(related: OrderLine::class);
    }
}
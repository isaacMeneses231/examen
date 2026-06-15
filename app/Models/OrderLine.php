<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderLine extends Model
{
    protected $fillable = [
        'order_id',
        'article_id',
        'requested_quantity',
        'unit_price',
        'line_subtotal'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(related: Order::class);
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(related: Article::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderLine extends Model
{
    protected $fillable = [
        
        'requested_quantity',
        'unit_price',
        'line_subtotal',
        'order_id',
        'article_id'
    ];

    public function order()
    {
        return $this->belongsTo( Order::class);
    }

    public function article()
    {
        return $this->belongsTo( Article::class);
    }
}
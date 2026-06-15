<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleFactory extends Model
{
    protected $fillable = [
        'factory_id',
        'article_id',
        'current_stock',
        'negotiated_supplier_cost',
        'estimated_delivery_time'
    ];

    public function factory(): BelongsTo
    {
        return $this->belongsTo(related: Factory::class);
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(related: Article::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleFactory extends Model
{
    protected $fillable = [
        
        'current_stock',
        'supplier_cost',
        'delivery_time',
        'factory_id',
        'article_id'
    ];

    public function factory()
    {
        return $this->belongsTo( Factory::class);
    }

    public function article()
    {
        return $this->belongsTo( Article::class);
    }
}
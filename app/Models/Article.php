<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = [
        'internal_code',
        'detailed_description',
        'current_sale_price',
        'average_purchase_cost',
        'availability_status',
        'entry_date'
    ];

    public function articleFactories(): HasMany
    {
        return $this->hasMany(related: ArticleFactory::class);
    }

    public function orderLines(): HasMany
    {
        return $this->hasMany(related: OrderLine::class);
    }
}
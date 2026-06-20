<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = [
        'internal_code',
        'detailed_description',
        'sale_price',
        'purchase_cost',
        'availability_status',
        'entry_date'
    ];

    public function articleFactories()
    {
        return $this->hasMany( ArticleFactory::class);
    }

    public function orderLines()
    {
        return $this->hasMany( OrderLine::class);
    }
}
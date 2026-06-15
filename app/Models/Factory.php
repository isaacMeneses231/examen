<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factory extends Model
{
    protected $fillable = [
        'company_name',
        'tax_id',
        'contact_phone',
        'supplier_email',
        'physical_address',
        'supplier_status'
    ];

    public function articleFactories(): HasMany
    {
        return $this->hasMany(related: ArticleFactory::class);
    }
}
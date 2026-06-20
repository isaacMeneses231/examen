<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factory extends Model
{
    protected $fillable = [
        'company_name',
        'ruc_number',
        'contact_phone',
        'supplier_email',
        'physical_address',
        'supplier_status'
    ];

    public function articleFactories()
    {
        return $this->hasMany( ArticleFactory::class);
    }
}
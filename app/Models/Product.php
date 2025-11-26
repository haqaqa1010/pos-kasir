<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'barcode',
        'name',
        'category_id',
        'unit_id',
        'purchase_price',
        'selling_price',
        'stock',
        'status',
    ];

    protected $casts = [
        'purchase_price' => 'decimal:2',
        'selling_price'  => 'decimal:2',
        'stock'          => 'integer',
        'status'         => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}

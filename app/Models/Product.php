<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name',
    'category',
    'stock',
    'minimum_stock',
    'price',
    'description',
];

    protected function casts(): array
    {
        return [
            'stock' => 'integer',
            'minimum_stock' => 'integer',
            'price'  => 'decimal:2', 
        ];
    }

    public function getStockStatusAttribute(): string
    {
        return $this->stock <= $this->minimum_stock
            ? 'Stok Menipis'
            : 'Stok Aman';
    }
}//

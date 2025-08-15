<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'suppliers_id',
        'name',
        'images',
        'stock',
        'unit',
        'price',
        'discount',
        'description',
    ];
    public function suppliers()
    {
        return $this->belongsTo(Suppliers::class, 'suppliers_id', 'id');
    }
}

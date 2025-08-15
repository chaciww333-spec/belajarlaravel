<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table= "suppliers";

    protected $fillable=[
        'name',
        'addres',
        'province',
        'city',
        'postcode',
        'phone',
        'fax',
    ];
    public function suppliers()
    {
        return $this->hasMany(Suppliers::class, 'suppliers_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table='product';
    protected $primarykey='id';
    protected $fillable=[
        'cate_id',
        'productName',
        'pricein',
        'priceout',
        'stock',
        'image',
        'Description',
    ];

}

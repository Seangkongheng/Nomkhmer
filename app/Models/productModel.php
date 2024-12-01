<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function category(){
        return $this->BelongsTo(Catagory::class ,'cat_id');
    }

}

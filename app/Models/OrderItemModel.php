<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItemModel extends Model
{
    use HasFactory;
    protected $table ='order_item';
    protected $primarykey='id';
    protected $fillable=[
        
        'order_id',
        'product_id',
        'qty',
        'price'
        ];

public function products(): BelongsTo
{
    return $this->belongsTo(productModel::class,'product_id','id');
}
}

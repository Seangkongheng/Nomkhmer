<?php

namespace App\Models;

use App\Models\OrderItemModel as ModelsOrderItemModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class order extends Model
{
    use HasFactory;

    protected $table='order';
    protected $fillable = [
        'Fistname',
        'lastName',
        'email',
        'address1',
        'address2',
        'phone',
        'city',
        'state',
        'contry',
        'pincode',
    ];
       
public function Orderitem()
{
    return $this->hasMany(OrderItemModel::class);
}
}

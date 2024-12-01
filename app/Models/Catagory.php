<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table ='catagory';
    protected $primarykey='id';
    protected $fillable=['Catagroy_name','Decription'];

    public function products()
    {
        return $this->hasMany(productModel::class, 'cate_id');
    }

}

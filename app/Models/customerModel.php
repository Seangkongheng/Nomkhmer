<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerModel extends Model
{
    use HasFactory;
    protected $table ='customer';
    protected $primarykey='id';
    protected $fillable = [
        'name', 'email', 'password',
    ];


  
   
}

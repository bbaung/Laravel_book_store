<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'username',
        'email',
        'phone',
        'address',
        'book_id',
        'bookname',
        'quantity',
        'bookprice',
        'totalprice',
    ];
    
}

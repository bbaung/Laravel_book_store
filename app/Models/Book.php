<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=[
        'book_id',
        'bk_name',
        'bk_author',
        'bk_cati',
        'bk_rel_date',
        'bk_price',
        'bk_quantity',
        'bk_review',
    ];
}

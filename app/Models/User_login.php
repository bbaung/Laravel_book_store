<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_login extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'username','password' ,'email', 'phone_number', 'address',// Add other fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

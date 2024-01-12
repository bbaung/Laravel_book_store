<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'phone_number',
        'password',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    protected static function boot()
    {
        parent::boot();

        // Creating event listener
        static::creating(function ($user) {
            $login = new UserLogin([
                'username' => $user->username,
                'email' => $user->email,
                'password' =>  $user->password,
                'phone_number' => $user->phone_number,
                'address'=> $user->address,
                // Add other fields as needed
            ]);

            $user->login()->save($login);
        });

        // Updating event listener
        static::updating(function ($user) {
            $login = $user->login;

            if ($login) {
                $login->update([
                    'username' => $user->username,
                    'email' => $user->email,
                    'password' =>  $user->password,
                    'phone_number' => $user->phone_number,
                    'address'=> $user->address,
                    // Update other fields as needed
                ]);
            }
        });
    }

    // Relationship with user_logins table
    public function login()
    {
        return $this->hasOne(User_login::class);
    }
}

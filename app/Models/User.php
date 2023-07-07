<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'is_super_admin',
        'first_name',
        'last_name',
        'email',
        'gender',
        'phone',
        'password',
        'profile_image',
        
       
       
    ];
    public function isSuperAdmin()
    {
        return $this->is_super_admin;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_super_admin' => 'boolean', // Cast 'is_super_admin' as a boolean
    ];
    // public function attendees()
    // {
    //     return $this->hasMany(Sherehe::class);
    // }
    public function getIsSuperAdminAttribute($value)
{
    return $value;
}

 
}

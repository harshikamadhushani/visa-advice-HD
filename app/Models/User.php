<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'role_id',
        'about',
        'passport_no',
        'mobile_no',
        'postal_address',
        'profile_pic'
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

     /**
     * Calculate the profile completion percentage.
     *
     * @return int
     */
    public function getProfileCompletionPercentage()
    {
        $filledFields = [
            'name',
            'email',
            'username',
            'about',
            'passport_no',
            'mobile_no',
            'postal_address',
        ];

        $filledCount = 0;

        foreach ($filledFields as $field) {
            if (!empty($this->$field)) {
                $filledCount++;
            }
        }

        $totalFields = count($filledFields);

        return ($totalFields > 0) ? round(($filledCount / $totalFields) * 100) : 0;
    }
    public function country()
    {
        return $this->hasOne(Country::class);
    }
}

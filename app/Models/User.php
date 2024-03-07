<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'exp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function businesses()
    {
        return $this->belongsToMany(Business::class)->withPivot('role');
    }

    public function ownedBusinesses()
    {
        return $this->hasMany(Business::class);
    }

    public function badges()
    {
        return $this->belongsToMany(Badges::class);
    }

    public function addExp($points)
    {
        $this->exp += $points;

        $expNeeded = $this->level * 100;

        while ($this->exp >= $expNeeded) {
            $this->exp -= $expNeeded;
            $this->level++;
            $expNeeded = $this->level * 100;
        }

        $this->save();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

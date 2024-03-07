<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Baril\Sqlout\Searchable;

class Business extends Model
{
    use HasFactory, Searchable;

    public $asYouType = true;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
        'user_id', // Assuming you want to allow mass assignment of the user_id field
        'specific_description',
        'city',
        'state',
        'zip',
        'images',
        'hours',
        'menu',
        'social_media',
        'website',
        'rating',
    ];

    protected $appends = [
        'business_photo_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'business_users', 'business_id', 'user_id')
                    ->withPivot('role');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /*public function getBusinessPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/' . $this->photo) : asset('img/default-business-photo.jpg');
    }*/

    public function location()
    {
        return $this->belongsTo(Locations::class);
    }

    public function products()
        {
            return $this->hasMany(Products::class);
        }

    public function toSearchableArray()
    {

        return [
            'name' => $this->name,
            'description' => $this->description,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'hours' => $this->hours,
            'menu' => $this->menu,
            'website' => $this->website,
            'rating' => $this->rating,
        ];
    }
}

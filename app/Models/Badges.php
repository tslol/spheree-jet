<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Badges extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'exp'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

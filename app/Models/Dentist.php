<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $guarded = [];

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getProfilePictureAttribute($value)
    {
        return asset('assets/front/img/dentists/' . $value);
    }
}

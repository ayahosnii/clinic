<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistSchedule extends Model
{
    use HasFactory;

    public function dentist()
    {
        return $this->belongsTo(Dentist::class, 'dentist_id');
    }
}
